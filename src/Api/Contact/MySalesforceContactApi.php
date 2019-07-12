<?php

namespace Sunnysideup\SalesforcePartner\Api\Contact;

use Exception;
use InvalidArgumentException;
use MySalesforcePartnerApi;
use MySalesforcePartnerApiConnectionOnly;
use SalesforceContactLog;
use SForce\SObject;
use ViewableData;

/**
 * This class adds / updates subscribers to Salesforce
 */


/**
 * ### @@@@ START REPLACEMENT @@@@ ###
 * WHY: upgrade to SS4
 * OLD:  extends Object (ignore case)
 * NEW:  extends ViewableData (COMPLEX)
 * EXP: This used to extend Object, but object does not exist anymore. You can also manually add use Extensible, use Injectable, and use Configurable
 * ### @@@@ STOP REPLACEMENT @@@@ ###
 */
class MySalesforceContactApi extends ViewableData
{
    /**
     * @var boolean
     */
    protected static $debug = false;

    protected static $my_singleton_connection = null;

    /**
     * @param string $email
     * @param string $phoneNumber - OPTIONAL
     * @param string $firstName - OPTIONAL
     * @param string $lastName - OPTIONAL
     * @param array $extraFields - OPTIONAL
     * @param array $extraFilterArray - OPTIONAL
     *
     * @return bool
     */
    public static function add_email_subscriber(
        $email,
        $phoneNumber = null,
        $firstName = null,
        $lastName = null,
        $extraFields = [],
        $extraFilterArray = []
    ) {
        self::assert_email($email);

        $fields = $extraFields;
        $fields['Email'] = $email;
        $fields['FirstName'] = '-';
        $fields['LastName'] = '-';

        if ($firstName) {
            $fields['FirstName'] = $firstName;
        }
        if ($lastName) {
            $fields['LastName'] = $lastName;
        }
        if ($phoneNumber) {
            $fields['Phone'] = $phoneNumber;
        }

        //doing it!
        return self::create_contact($fields, $extraFilterArray);
    }

    /**
     * @param string $email
     * @param array $extraFields - OPTIONAL
     * @param array $extraFilterArray - OPTIONAL
     *
     * @return bool
     */
    public static function update_email_subscriber(
        $email,
        $extraFields = [],
        $extraFilterArray = []
    ) {
        self::assert_email($email);
        $fields = $extraFields;
        $fields['Email'] = $email;

        //doing it
        return self::update_contact($fields, $extraFilterArray);
    }

    /**
     * @param string $email
     * @param array $extraFilterArray
     *
     * @return bool
     */
    public static function is_email_registered($email, $extraFilterArray = [])
    {
        $fieldsArray = ['Email' => $email];
        $subscriber = self::retrieve_contact($fieldsArray, $extraFilterArray);

        return $subscriber ? true : false;
    }

    /**
     * todo: all nullify thingy
     * assumes that all fields are correct (e.g. correct email format)
     * can use email or phone as identifier
     * @param  array $fieldsArray
     * @param  array $extraFilterArray -independent additional filters for retrieving contact
     *
     * @return bool
     */
    public static function create_contact($fieldsArray, $extraFilterArray = [])
    {
        $connection = self::get_my_singleton_connection();
        //get defaults
        $extraFilterArray = array_merge(
            MySalesforceContactConfigApi::get_fields_for_filter(),
            $extraFilterArray
        );
        $fieldsArray = array_merge(
            MySalesforceContactConfigApi::get_fields_to_send_on_creation(),
            $fieldsArray,
            $extraFilterArray
        );
        $log = SalesforceContactLog::create_contact_log(
            'Created',
            $fieldsArray,
            $extraFilterArray
        );

        $existingContact = self::retrieve_contact($fieldsArray, $extraFilterArray);
        // Contact not found. Create a new Contact and set the details
        if ($existingContact) {
            //we are out of here!
            return true;
        }
        $contact = new SObject();
        $contact->setType('Contact');
        foreach ($fieldsArray as $fieldName => $fieldValue) {
            $contact->{$fieldName} = $fieldValue;
        }

        //doing it!
        $error = '';
        $response = null;
        try {
            $response = $connection->create([$contact]);
        }
        //catch exception
        catch (\Exception $e) {
            $error = $e->getMessage();
        }

        if (self::$debug) {
            $connection->debug($response);
        }
        return $log->confirmContactLog($response, $error);
    }

    /**
     * todo: all nullify thingy
     * assumes that all fields are correct (e.g. correct email format)
     * can use email or phone as identifier
     * @param  array $fieldsArray
     * @param  array $extraFilterArray -independent additional filters for retrieving contact
     *
     * @return bool
     */
    public static function update_contact($fieldsArray, $extraFilterArray = [])
    {
        $connection = self::get_my_singleton_connection();

        //add defaults
        $extraFilterArray = array_merge(
            MySalesforceContactConfigApi::get_fields_for_filter(),
            $extraFilterArray
        );
        $fieldsArray = array_merge(
            MySalesforceContactConfigApi::get_fields_to_send_on_update(),
            $fieldsArray,
            $extraFilterArray
        );
        $log = SalesforceContactLog::create_contact_log(
            'Updated',
            $fieldsArray,
            $extraFilterArray
        );

        //find existing contact
        $existingContact = self::retrieve_contact($fieldsArray, $extraFilterArray);
        // Contact found. Update Contact with details
        if ($existingContact) {
            $contact = new SObject();
            $contact->setType('Contact');
            $contact->setId($existingContact->getId());
            foreach ($fieldsArray as $fieldName => $fieldValue) {
                if ($fieldValue !== $existingContact->{$fieldName}) {
                    $contact->{$fieldName} = $fieldValue;
                }
            }
            //doing it!
            $error = '';
            $response = null;
            try {
                $response = $connection->update([$contact]);
            }
            //catch exception
            catch (\Exception $e) {
                $error = $e->getMessage();
            }
        } else {
            //we are out of here!
            return true;
        }
        if (self::$debug) {
            echo $error;
            $connection->debug($response);
        }
        return $log->confirmContactLog($response, $error);
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
        $connection = self::get_my_singleton_connection();
        // Check for existing Contact
        $existingContact = null;
        $filterArray = [];
        $finalFilterArray = [];
        $result = null;

        $extraFilterArray = array_merge(
            MySalesforceContactConfigApi::get_fields_for_filter(),
            $extraFilterArray
        );

        $email = isset($fieldsArray['Email']) ? trim($fieldsArray['Email']) : null;
        if ($email) {
            $filterArray['Email'] = $email;
        } else {
            $phone = isset($fieldsArray['Phone']) ? trim($fieldsArray['Phone']) : null;
            if ($phone) {
                $filterArray['Phone'] = $phone;
            }
        }
        if (count($filterArray)) {
            $finalFilterArray[] = MySalesforcePartnerApi::array2sql($filterArray);
            if (count($extraFilterArray)) {
                $finalFilterArray[] = MySalesforcePartnerApi::array2sql($extraFilterArray);
            }
            $where = ' ( ' . implode(' ) AND ( ', $finalFilterArray) . ' ) ';
            $query = 'SELECT Id, FirstName, LastName, Phone, Email FROM Contact WHERE ' . $where . ' LIMIT 1';

            $result = $connection->query($query);
            if ($result) {
                $contacts = $result->getRecords();
                if ($contacts) {
                    $existingContact = $contacts[0];
                }
            }
        }
        if (self::$debug) {
            $connection->debug($result);
        }

        return $existingContact;
    }

    /**
     * @return array
     */
    public static function retrieve_contact_record_types()
    {
        $connection = self::get_my_singleton_connection();
        $returnArray = [];

        $query = '
            SELECT Id, Name, Description, DeveloperName, IsActive, sObjectType
            FROM RecordType
            WHERE IsActive = true AND sObjectType = \'Contact\'';

        $result = $connection->query($query);
        if ($result) {
            $records = $result->getRecords();
            if ($records) {
                foreach ($records as $record) {
                    $object = $record->getFields();
                    $object->Id = $record->getId();
                    $returnArray[] = $object;
                }
            }
        }
        if (self::$debug) {
            $connection->debug($result);
        }
        return $returnArray;
    }

    /**
     * @param string $email
     */
    public static function assert_email($email)
    {
        if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Wrong email address format');
        }
    }

    /**
     * @param $b
     */
    public static function set_debug($b = true)
    {
        self::$debug = $b;
    }

    protected static function get_my_singleton_connection()
    {
        if (self::$my_singleton_connection === null) {
            self::$my_singleton_connection = MySalesforcePartnerApiConnectionOnly::singleton();
        }

        return self::$my_singleton_connection;
    }
}
