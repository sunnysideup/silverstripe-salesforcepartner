<?php

use SForce\Wsdl\SaveResult;

class SalesforceContact extends DataObject
{

    private static $fields_to_send_to_sales_force = [
        'FirstName',
        'LastName',
        'Email',
    ];

    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Sales Force Contact';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Sales Force Contacts';

    /**
     * SS4 prep!
     * @var string
     */
    private static $table_name = 'SalesforceContact';

    private static $db = [
        'SalesforceIdentifier' => 'Varchar(40)',
        'FirstName' => 'Varchar(255)',
        'LastName' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'SentToSalesforce' => 'Boolean',
        'CommsErrors' => 'Text',
    ];


    private static $default_sort = [
        'ID' => 'DESC'
    ];

    /**
     * Defines a default list of filters for the search context
     * @var array
     */
    private static $searchable_fields = [
        'SentToSalesforce' => 'ExactMatchFilter',
        'SalesforceIdentifier' => 'PartialMatchField',
        'FirstName' => 'PartialMatchField',
        'LastName' => 'PartialMatchField',
        'Email' => 'PartialMatchField',
    ];

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    private static $summary_fields = [
        'SentToSalesforce' => 'Sent to SF',
        'SalesforceIdentifier' => 'SF ID',
        'FirstName' => 'First Name',
        'LastName' => 'Last Name',
        'Email' => 'Email',
    ];

    private static $indexes = [
        'Created' => true,
        'LastEdited' => true,
        'SentToSalesforce' => true,
        'SalesforceIdentifier' => true,
        'FirstName' => true,
        'LastName' => true,
        'Email' => true,
    ];


    protected $onAfterWriteDone = false;
    /**
     * Event handler called after writing to the database.
     */
    public function onAfterWrite()
    {
        parent::onAfterWrite();
        if($this->onAfterWriteDone === false) {
            if(! $this->SentToSalesforce) {
                $outcomes = MySalesforcePartnerAPI::create_contact(
                    $this->prepareFieldsToSendToSalesforce()
                );
                if(count($outcomes) === 1) {
                    foreach($outcomes as $outcome) {
                        $this->CommsErrors .= $outcome->getErrors()." ||| ";
                        $this->SentToSalesforce .= $outcome->getSuccess() ? true : false;
                        if(! $this->SalesforceIdentifier) {
                            $this->SalesforceIdentifier = $outcome->getId();
                        }
                    }
                    $this->write();
                    $this->onAfterWriteDone = true;
                } else {
                    user_error('unexpected number of outcomes: '.count($outcomes));
                }
            }
        }
    }

    protected function prepareFieldsToSendToSalesforce()
    {
        $return = [];
        $fields = Config::inst()->get('SalesforceContact', 'fields_to_send_to_sales_force');
        foreach($fields as $field) {
            if($this->$field) {
                $return[$field] = $this->$field;
            }
        }

        return $return;
    }

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->replaceField(
            'SalesforceIdentifier',
            ReadonlyField::create(
                'SalesforceIdentifier',
                'Sales Force Identifier'
            )
        );
        $fields->replaceField(
            'SentToSalesforce',
            ReadonlyField::create(
                'SentToSalesforce',
                'Sent to Sales Force'
            )->setRightTitle('Set to TRUE (1) if sent successfully.')
        );
        $fields->replaceField(
            'CommsErrors',
            ReadonlyField::create(
                'CommsErrors',
                'Communication Errors'
            )->setRightTitle('Separated by three ||| symbols.')
        );
        $fields->addFieldToTab(
            'Root.Advanced',
            LiteralField::create(
                'WhatWeSend',
                '
                    <h2>What is Send</h2>,
                    <pre>'.print_r($this->prepareFieldsToSendToSalesforce(), 1).'</pre>
                '
            )
        );
        return $fields;
    }


}
