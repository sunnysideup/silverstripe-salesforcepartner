<?php

use SForce\Client\Partner;

use SForce\Wsdl\create;
use SForce\SObject;
use SForce\Wsdl\SaveResult;

class MySalesForcePartnerAPI extends Partner
{

    /**
     * todo: all nullify thingy
     * @param  array $fieldsArray
     *
     * @return SForce\Wsdl\SaveResult
     */
    public static function create_contact($fieldsArray)
    {
        $connection = MySalesForcePartnerAPIConnectionOnly::singleton();
        $response = null;

        // Check for existing Contact
        $existingContact = null;
        $email = isset($fieldsArray['Email']) ? $fieldsArray['Email'] : null;

        if ($email) {
            $existingContact = self::retrieve_contact($email);
        }

        if (! $existingContact) {
            $phone = isset($fieldsArray['Phone']) ? $fieldsArray['Phone'] : null;

            if ($phone) {
                $existingContact = self::retrieve_contact(null, $phone);
            }
        }

        // Contact not found. Create a new Contact and set the details
        if (!$existingContact) {
            $contact = new SObject();
            $contact->setType('Contact');
            foreach ($fieldsArray as $fieldName => $fieldValue) {
                $contact->$fieldName = $fieldValue;
            }
            $response = $connection->create([$contact]);
        }
        else {
            return null;
        }

        return $response;
    }

    /**
     * Retrive a contact by email address or by phone number
     *
     * @param string $email Email address of the contact
     * @param string $phone Phone number of the contact
     * @return SForce\SObject:
     */
    public static function retrieve_contact($email = null, $phone = null)
    {
        $connection = MySalesForcePartnerAPIConnectionOnly::singleton();
        $query = "";

        $email = trim($email);
        $phone = trim($phone);

        if ($email) {
            $query = "SELECT Id, FirstName, LastName, Phone, Email FROM Contact WHERE Email = " . Convert::raw2sql($email, true) . " LIMIT 1";
        } elseif ($phone) {
            $query = "SELECT Id, FirstName, LastName, Phone, Email FROM Contact WHERE Phone = " . Convert::raw2sql($phone, true) . " LIMIT 1";
        }

        if (! $query) {
            return null;
        }

        $result = $connection->query($query);

        if (! $result) {
            return null;
        }

        $contacts = $result->getRecords();

        if (! $contacts) {
            return null;
        }

        return $contacts[0];
    }

    public function debug()
    {
        $xml = $this->getLastRequest();

        if (! $xml) {
            return null;
        }
        $domxml = new \DOMDocument('1.0');
        $domxml->preserveWhiteSpace = false;
        $domxml->formatOutput = true;
        /* @var $xml SimpleXMLElement */
        $domxml->loadXML($xml);
        echo $domxml->saveXML();
    }

    #####################################
    # overriding parent class to fix bugs
    # in the parent class.
    #####################################
    /**
     * Adds one or more new individual objects to your organization's data.
     *
     * @param SObject[] $sObjects Array of one or more sObjects (up to 200) to create.
     * @param null|string $type Unused
     *
     * @return SaveResult
     */
    public function create($sObjects, $type = null)
    {
        foreach ($sObjects as $sObject) {
            if (property_exists($sObject, 'fields')) {
                $sObject->setAny($this->_convertToAny($sObject->getFields()));
                // print_r($this->_convertToAny($sObject->getFields()));
            }
        }
        $createObject = new create($sObjects);

        return parent::_create($createObject);
    }

    /**
     * NOTA BENE:
     * added here because Describe Layout occurs two times (double) with capital D
     * (DescribeLayout) and without capital D (changed to describeLayoutDouble)
     *
     * Use describeLayoutDouble to retrieve information about the layout (presentation
     * of data to users) for a given object type. The describeLayoutDouble call returns
     * metadata about a given page layout, including layouts for edit and
     * display-only views and record type mappings. Note that field-level security
     * and layout editability affects which fields appear in a layout.
     *
     * @param string $type Object Type
     * @param array $recordTypeIds
     *
     * @return Wsdl\DescribeLayoutResult
     */
    public function describeLayoutDouble($type, array $recordTypeIds = [])
    {
        $this->setHeaders(static::CALL_DESCRIBE_LAYOUT);

        return $this->sforce
            ->describeLayoutDouble(new Wsdl\describeLayoutDouble($type, $recordTypeIds))
            ->getResult();
    }
}
