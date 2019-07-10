<?php

/**
 * this can be linked to pages / other objects using many_many relationships
 * so that you can send default record values to Salesforce
 */
class SalesForceDefaultContactField extends DataObject
{

    /**
     *
     * @param  array $array fields to send
     *
     * @return LiteralField
     */
    public static function field_showing_fields_to_send($array)
    {
        $htmlArray = [];
        foreach($array as $field => $value) {
            $htmlArray[] = $field.' = '.$value.' ('.gettype($value).')';
        }

        return LiteralField::create(
            'FieldsToSendToSalesforce',
            '<h2>Fields Added:</h2><p>'.implode('</p><p>', $htmlArray).'</p>'
        );
    }

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
                'Key' => $key
            ];

            $obj = SalesForceDefaultContactField::get()->filter($filter)->first();
            if(! $obj) {
                $obj->create($filter);
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
    }

}
