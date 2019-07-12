<?php

/**
 * this can be linked to pages / other objects using many_many relationships
 * so that you can send default record values to Salesforce
 */
class SalesforceDefaultContactField extends DataObject
{

    /**
     * contact fields that should be created by default...
     * @var array
     */
    private static $defaults_records = [];

    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Default Contact Field';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Default Contact Fields';

    /**
     *
     * @var array
     */
    private static $db = [
        'Key' => 'Varchar',
        'Value' => 'Varchar',
        'IsFilter' => 'Boolean',
    ];

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    private static $summary_fields = [
        'Key' => 'Field Name',
        'Value' => 'Field Value',
        'IsFilter.Nice' => 'Is Filter',
    ];

    /**
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Key . ' = '.$this->Value;
    }


    public function requireDefaultRecords()
    {
        foreach($this->Config()->get('default_records') as $key => $value) {
            $filter = [
                'Key' => $key
            ];

            $obj = SalesforceDefaultContactField::get()->filter($filter)->first();
            if(! $obj) {
                $obj = SalesforceDefaultContactField::create($filter);
                $obj->Value = $value;
                $obj->write();
            }

        }
    }

    /**
     * @return mixed
     */
    public function BetterValue()
    {
        if(strtolower($this->Value) === 'true') {
            return true;
        }
        if(strtolower($this->Value) === 'false') {
            return false;
        }
        if(floatval($this->Value)) {
            return floatval($this->Value);
        }
        if(intval($this->Value)) {
            return intval($this->Value);
        }

        return trim($this->Value);
    }




}
