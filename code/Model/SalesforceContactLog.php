<?php

use SForce\Wsdl\SaveResult;

class SalesforceContactLog extends DataObject
{

    /**
     * create contact log
     * @param  string $type
     * @param  array $fieldsSent
     * @param  array $filters
     *
     * @return SalesforceContactLog
     */
    public static function create_contact_log($type, array $fieldsSent, array $filters) : SalesforceContactLog
    {
        $fieldsSent = serialize($fieldsSent);
        $filters = serialize($fieldsSent);
        $obj = SalesforceContactLog::create(
            [
                'Type' => $type,
                'FieldsSent' => $fieldsSent,
                'Filters' => $filters,
            ]
        );
        $id = $obj->write();

        return SalesforceContactLog::get()->byID($id);
    }

    /**
     * returns true if the contact update was successful
     * @param  mixed $response
     *
     * @return bool
     */
    public function confirmContactLog($response) : bool
    {
        $id = '';
        $errors = '';
        print_r($response);
        die();
        $this->SalesforceIdentifier = $id;
        $this->Errors = $errors;
        $this->write();

        return $this->hasError();
    }

    public function hasError() : bool
    {
        return $this->SalesforceIdentifier ? false : true;
    }

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

    private static $db = [
        'SalesforceIdentifier' => 'Varchar(40)',
        'Type' => 'Enum("Created,Updated")',
        'FieldsSent' => 'Text',
        'Filters' => 'Text',
        'Errors' => 'Text',
    ];


    private static $default_sort = [
        'ID' => 'DESC'
    ];

    /**
     * Defines a default list of filters for the search context
     * @var array
     */
    private static $searchable_fields = [
        'Type' => 'ExactMatchFilter',
        'SalesforceIdentifier' => 'PartialMatchField',
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
        'SalesforceIdentifier' => 'SF ID',
        'Type' => 'Type',
        'Errors' => 'Errors'
    ];

    private static $indexes = [
        'SalesforceIdentifier' => true
    ];

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Main',
            [
                ReadonlyField::create(
                    'SalesforceIdentifier',
                    'Sales Force Identifier'
                ),
                ReadonlyField::create(
                    'FieldsSent',
                    'Fields Sent',
                    $this->serializedToHTML($this->FieldsSent)
                ),
                ReadonlyField::create(
                    'Type',
                    'Type'
                ),
                ReadonlyField::create(
                    'Filters',
                    'Filters',
                    $this->serializedToHTML($this->Filters)
                ),
                ReadonlyField::create(
                    'Errors',
                    'Communication Errors'
                )->setRightTitle('Separated by three ||| symbols.')
            ]
        );

        return $fields;
    }

    /**
     * DataObject create permissions
     * @param Member $member
     * @return bool
     */
    public function canCreate($member = null)
    {
        return false;
    }

    /**
     * DataObject edit permissions
     * @param Member $member
     * @return bool
     */
    public function canEdit($member = null)
    {
        return false;
    }

    /**
     * DataObject delete permissions
     * @param Member $member
     * @return bool
     */
    public function canDelete($member = null)
    {
        return false;
    }

    /**
     *
     * @param  string $serializedString (serialised data)
     * @return string (html)
     */
    protected function serializedToHTML($serializedString)
    {
        $s = unserialize($serializedString);

        return '<pre>'.print_r($s, 1).'</pre>';
    }

}
