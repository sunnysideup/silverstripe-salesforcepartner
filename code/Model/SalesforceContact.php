<?php

use SForce\Wsdl\SaveResult;

class SalesForceContact extends DataObject
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
    private static $table_name = 'SalesForceContact';

    private static $db = [
        'SalesForceIdentifier' => 'Varchar(40)',
        'FirstName' => 'Varchar(255)',
        'LastName' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'SentToSalesForce' => 'Boolean',
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
        'SentToSalesForce' => 'ExactMatchFilter',
        'SalesForceIdentifier' => 'PartialMatchField',
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
        'SentToSalesForce' => 'Sent to SF',
        'SalesForceIdentifier' => 'SF ID',
        'FirstName' => 'First Name',
        'LastName' => 'Last Name',
        'Email' => 'Email',
    ];

    private static $indexes = [
        'Created' => true,
        'LastEdited' => true,
        'SentToSalesForce' => true,
        'SalesForceIdentifier' => true,
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
            if(! $this->SentToSalesForce) {
                $outcomes = MySalesForcePartnerAPI::create_contact(
                    $this->prepareFieldsToSendToSalesForce()
                );
                if(count($outcomes) === 1) {
                    foreach($outcomes as $outcome) {
                        $this->CommsErrors .= $outcome->getErrors()." ||| ";
                        $this->SentToSalesForce .= $outcome->getSuccess() ? true : false;
                        if(! $this->SalesForceIdentifier) {
                            $this->SalesForceIdentifier = $outcome->getId();
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

    protected function prepareFieldsToSendToSalesForce()
    {
        $return = [];
        $fields = Config::inst()->get('SalesForceContact', 'fields_to_send_to_sales_force');
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
            'SalesForceIdentifier',
            ReadonlyField::create(
                'SalesForceIdentifier',
                'Sales Force Identifier'
            )
        );
        $fields->replaceField(
            'SentToSalesForce',
            ReadonlyField::create(
                'SentToSalesForce',
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
                    <pre>'.print_r($this->prepareFieldsToSendToSalesForce(), 1).'</pre>
                '
            )
        );
        return $fields;
    }


}
