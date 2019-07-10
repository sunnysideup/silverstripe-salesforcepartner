<?php

use SForce\Client\Partner;

use SForce\SObject;
use SForce\Wsdl\SaveResult;

class MySalesForcePartnerAPI extends Partner
{

    protected $connection = null;

    public function __construct()
    {
        parent::__construct();
        $this->connection = MySalesForcePartnerAPIConnectionOnly::singleton();
    }

    /**
     * todo: all nullify thingy
     * assumes that all fields are correct (e.g. correct email format)
     * can use email or phone as identifier
     * @param  array $fieldsArray
     * @param  array $extraFilterArray -independent additional filters for retrieving contact
     *
     * @return SForce\Wsdl\SaveResult|null
     */
    public static function create_contact($fieldsArray, $extraFilterArray = [])
    {
        $response = null;
        $existingContact = self::array2sql($fieldsArray, $extraFilterArray);
        // Contact not found. Create a new Contact and set the details
        if ($existingContact) {
            return null;
        } else {
            $contact = new SObject();
            $contact->setType('Contact');
            foreach ($fieldsArray as $fieldName => $fieldValue) {
                $contact->$fieldName = $fieldValue;
            }
            $response = $this->connection->create([$contact]);
        }

        return $response;
    }

    /**
     * todo: all nullify thingy
     * assumes that all fields are correct (e.g. correct email format)
     * can use email or phone as identifier
     * @param  array $fieldsArray
     * @param  array $extraFilterArray -independent additional filters for retrieving contact
     *
     * @return SForce\Wsdl\SaveResult|null
     */
    public static function update_contact($fieldsArray, $extraFilterArray = [])
    {
        $response = null;
        $existingContact = self::array2sql($fieldsArray, $extraFilterArray);
        // Contact found. Update Contact with details
        if ($existingContact) {
            $contact = new SObject();
            $contact->setType('Contact');
            $contact->setId($existingContact->getId());
            foreach ($fieldsArray as $fieldName => $fieldValue) {
                if ($existingContact->$fieldName != $fieldValue) {
                    $contact->$fieldName = $fieldValue;
                }
            }
            $response = $this->connection->update([$contact]);
        } else {
            return null;
        }

        return $response;
    }

    /**
     * Retrive a contact by email address or by phone number
     * either the email (preferred) of phone needs to be set in the $fieldsArray
     *
     * @param array $fieldsArray
     * @param array $extraFilterArray additional filter key-value sets
     *
     * @return SForce\SObject|null
     */
    public static function retrieve_contact($fieldsArray, $extraFilterArray = [])
    {
        // Check for existing Contact
        $existingContact = null;
        $filterArray = [];
        $finalFilterArray = [];

        $email = isset($fieldsArray['Email']) ? trim($fieldsArray['Email']) : null;
        if ($email) {
            $filterArray['Email'] = $email;
        } else {
            $phone = isset($fieldsArray['Phone']) ? trim($fieldsArray['Phone']) : null;
            if ($phone) {
                $filterArray['Phone'] = $phone;
            }
        }
        if(count($filterArray)) {
            $finalFilterArray[] = self::array2sql($filterArray);
            if(count($extraFilterArray)) {
                $finalFilterArray[] = self::array2sql($extraFilterArray);
            }
            $where = ' ( '.implode(' ) AND ( ', $finalFilterArray).' ) ';
            $query = 'SELECT Id, FirstName, LastName, Phone, Email FROM Contact WHERE '.$where.' LIMIT 1';

            $result = $this->connection->query($query);
            if ($result) {
                $contacts = $result->getRecords();
                if ($contacts) {
                    $existingContact = $contacts[0];
                }
            }
        }

        return $existingContact;
    }

    /**
     * turns key value pairs into string
     * @param  array $array [description]
     * @return string
     */
    protected static function array2sql($array) : string
    {
        if(count($array) === 0) {
            user_error('must have at least one entry');
        }
        $inner = [];
        foreach($array as $field => $value) {
            $inner[$field] =  $field.' = '.Convert::raw2sql($value, true);
        }

        return implode(' AND ', $inner);
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
        $createObject = new SForce\Wsdl\create($sObjects);

        return parent::_create($createObject);
    }

    #####################################
    # overriding parent class to fix bugs
    # in the parent class.
    #####################################
    /**
     * Updates one or more new individual objects to your organization's data.
     *
     * @param SObject[] $sObjects Array of one or more sObjects (up to 200) to update.
     * @param null|string $type Unused
     *
     * @return SaveResult
     */
    public function update($sObjects, $type = null)
    {
        foreach ($sObjects as $sObject) {
            if (property_exists($sObject, 'fields')) {
                $sObject->setAny($this->_convertToAny($sObject->getFields()));
            }
        }
        $updateObject = new SForce\Wsdl\update($sObjects);

        return parent::_update($updateObject);
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
