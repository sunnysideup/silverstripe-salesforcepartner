<?php

namespace Sunnysideup\SalesforcePartner\Model;

use DataObject;
use DBField;
use LiteralField;
use ReadonlyField;

class SalesforceContactLog extends DataObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Sales Force Contact Log';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Sales Force Contact Log Entries';

    /**
     * SS4 prep!
     * @var string
     */
    private static $table_name = 'SalesforceContactLog';

    /**
     * ### @@@@ START REPLACEMENT @@@@ ###
     * WHY: upgrade to SS4
     * OLD: private static $db = (case sensitive)
     * NEW: private static $db = (COMPLEX)
     * EXP: Make sure to add a private static $table_name!
     * ### @@@@ STOP REPLACEMENT @@@@ ###
     */
    private static $db = [
        'SalesforceIdentifier' => 'Varchar(40)',
        'Type' => 'Enum("Created,Updated")',
        'Email' => 'Varchar',
        'Phone' => 'Varchar',
        'FirstName' => 'Varchar',
        'LastName' => 'Varchar',
        'Executed' => 'Boolean',
        'FieldsSent' => 'Text',
        'Filters' => 'Text',
        'HasError' => 'Boolean',
        'Errors' => 'Text',
    ];

    private static $default_sort = [
        'ID' => 'DESC',
    ];

    /**
     * Defines a default list of filters for the search context
     * @var array
     */
    private static $searchable_fields = [
        'Type' => 'ExactMatchFilter',
        'Executed' => 'ExactMatchFilter',
        'HasError' => 'ExactMatchFilter',
        'SalesforceIdentifier' => 'PartialMatchField',
        'Email' => 'PartialMatchField',
        'Phone' => 'PartialMatchField',
        'FirstName' => 'PartialMatchField',
        'LastName' => 'PartialMatchField',
        'FieldsSent' => 'PartialMatchField',
        'Filters' => 'PartialMatchField',
        'Errors' => 'PartialMatchField',
    ];

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    private static $summary_fields = [
        'Created.Nice' => 'When',
        'SalesforceIdentifier' => 'Code',
        'Type' => 'Type',
        'Email' => 'Email',
        'Phone' => 'Phone',
        'FirstName' => 'First',
        'LastName' => 'Last',
        'Executed.Nice' => 'Executed',
        'HasError.Nice' => 'Errors',
    ];

    private static $indexes = [
        'SalesforceIdentifier' => true,
        'Email' => 'Email',
        'Phone' => 'Phone',
    ];

    /**
     * create contact log
     * @param  string $type
     * @param  array $fieldsSent
     * @param  array $filters
     *
     * @return SalesforceContactLog|null
     */
    public static function create_contact_log($type, array $fieldsSent, array $filters)
    {
        //basic fields
        $email = isset($fieldsSent['Email']) ? $fieldsSent['Email'] : '';
        $phone = isset($fieldsSent['Phone']) ? $fieldsSent['Phone'] : '';
        $firstName = isset($fieldsSent['FirstName']) ? $fieldsSent['FirstName'] : '';
        $lastName = isset($fieldsSent['LastName']) ? $fieldsSent['LastName'] : '';

        //serialize
        $fieldsSent = serialize($fieldsSent);
        $filters = serialize($filters);
        $obj = self::create(
            [
                'Type' => $type,
                'FieldsSent' => $fieldsSent,
                'Filters' => $filters,
                'Email' => $email,
                'Phone' => $phone,
                'FirstName' => $firstName,
                'LastName' => $lastName,
            ]
        );
        $id = $obj->write();

        return self::get()->byID($id);
    }

    /**
     * returns true if the contact update was successful
     * @param  mixed $response
     *
     * @return bool
     */
    public function confirmContactLog($response, $error = '')
    {
        $id = '';
        $errors = '';
        $hasError = false;
        if (is_array($response)) {
            $response = $response[0];
        }
        if ($error) {
            $hasError = true;
            $errors = $error;
        }
        if ($response instanceof \SForce\Wsdl\SaveResult) {
            $id = $response->getId();
            if ($response->getSuccess()) {
                $hasError = false;
            } else {
                $errors = serialize($response->getErrors());
                $hasError = true;
            }
        } else {
            $errors .= '||| Unexpected response: ' . serialize($response);
        }
        $this->SalesforceIdentifier = $id;
        $this->Errors = $errors;
        $this->HasError = $hasError;
        $this->Executed = true;
        $this->write();

        return $this->HasError ? false : true;
    }

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeFieldsFromTab(
            'Root.Main',
            [
                'FieldsSent',
                'Filters',
                'HasError',
                'Executed',
            ]
        );
        $fields->addFieldsToTab(
            'Root.Main',
            [
                ReadonlyField::create(
                    'Created',
                    'Created',
                    DBField::create_field('SS_DateTime', $this->Created)->Nice()
                ),
                ReadonlyField::create(
                    'Type',
                    'Type'
                ),
                ReadonlyField::create(
                    'SalesforceIdentifier',
                    'Sales Force Identifier'
                ),
            ]
        );
        $fields->addFieldsToTab(
            'Root.Debug',
            [
                LiteralField::create(
                    'FieldsSentNice',
                    '<h2>Fields Sent</h2>' . $this->serializedToHTML($this->FieldsSent)
                ),
                LiteralField::create(
                    'FiltersNice',
                    '<h2>Filters</h2>' . $this->serializedToHTML($this->Filters)
                ),
                ReadonlyField::create(
                    'ExecutedNice',
                    'Executed',
                    DBField::create_field('Boolean', $this->Executed)->Nice()
                ),
                ReadonlyField::create(
                    'HasErrorNice',
                    'HasError',
                    DBField::create_field('Boolean', $this->HasError)->Nice()
                ),
                ReadonlyField::create(
                    'Errors',
                    'Communication Errors'
                )->setRightTitle('Separated by three ||| symbols.'),
            ]
        );

        return $fields;
    }

    /**
     * DataObject create permissions
     * @param Member $member
     * @return bool
     */
    public function canCreate($member = null, $context = [])
    {
        return false;
    }

    /**
     * DataObject edit permissions
     * @param Member $member
     * @return bool
     */
    public function canEdit($member = null, $context = [])
    {
        return false;
    }

    /**
     * DataObject delete permissions
     * @param Member $member
     * @return bool
     */
    public function canDelete($member = null, $context = [])
    {
        return false;
    }

    /**
     * @param  string $serializedString (serialised data)
     * @return string (html)
     */
    protected function serializedToHTML($serializedString)
    {
        $s = unserialize($serializedString);

        return '<pre>' . print_r($s, 1) . '</pre>';
    }
}
