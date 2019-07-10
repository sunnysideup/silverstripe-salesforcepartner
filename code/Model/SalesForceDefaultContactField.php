<?php

/**
 * this can be linked to pages / other objects using many_many relationships
 * so that you can send default record values to Salesforce
 */
class SalesForceDefaultContactField extends DataObject
{

    /**
     *
     * @var array
     */
    private static $db = [
        'Key' => 'Varchar',
        'Value' => 'Varchar'
    ];

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    private static $summary_fields = [
        'Key' => 'Field Name',
        'Value' => 'Field Value'
    ];

    /**
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Key . ' - '.$this->Value;
    }

    /**
     * contact fields that should be created by default...
     * @var array
     */
    private static $defaults_records = [];

    public function requireDefaultRecords()
    {
        foreach($this->Config()->get('default_records') as $key => $value) {
            $filter = [
                'Key' => $key,
                'Value' => $value,
            ];

            $obj = SalesForceDefaultContactField::get()->filter($filter)->first();
            if(! $obj) {
                $obj->create($filter);
            }

            $obj->write();
        }
    }

}
