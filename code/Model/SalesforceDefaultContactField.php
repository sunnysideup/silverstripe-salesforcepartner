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

    private static $site_wide_fields_to_send = [];

    private static $site_wide_filter_values = [];

    /**
     * Needs to link to a many-many relationship (SalesforceDefaultContactFields)
     * @param  array $array fields to send
     *
     * @return CheckboxSetField
     */
    public static function select_field(
        $fieldName = 'SalesforceDefaultContactFields',
        $title = 'Default Fields'
    )
    {
        $htmlArray = [];
        foreach($array as $field => $value) {
            $htmlArray[] = $field.' = '.$value.' ('.gettype($value).')';
        }

        return CheckboxSetField::create(
            $fieldName,
            $title,
            SalesforceDefaultContactField::get()->map->toArray()
        )
            ->setDescription('
                These default fields are always sent to Salesforce, you can
                <a href="/admin/salesforceadmin">Edit or Add to the List</a> as required.
                Please change with care.
            ')
        ;
    }

    /**
     *
     * @param  array|DataList|null $array fields to send
     * @param  string $title fields to send
     *
     * @return LiteralField
     */
    public static function fields_to_send_field(
        $mixed = null,
        $title  = 'Fields Added'
    )
    {
        $array = self::get_fields_to_send($mixed);
        $htmlArray = [];
        foreach($array as $field => $value) {
            $htmlArray[] = $field.' = '.$value.' ('.gettype($value).')';
        }
        if(!count($htmlArray) == 0) {
            $htmlArray[] = 'none';
        }
        return LiteralField::create(
            'FieldsToSendToSalesforce',
            '<h2>'.$title.'</h2><p>- '.implode('</p><p>', $htmlArray).'</p>'
        );
    }
    /**
     *
     * @param  array|DataList|null $array fields to send
     * @param  string $title fields to send
     *
     * @return LiteralField
     */
    public static function fields_to_filter_field(
        $mixed = null,
        $title  = 'Filter Fields'
    )
    {
        $array = self::get_fields_to_send($mixed);
        $htmlArray = [];
        foreach($array as $field => $value) {
            $htmlArray[] = $field.' = '.$value.' ('.gettype($value).')';
        }
        if(!count($htmlArray) == 0) {
            $htmlArray[] = 'none';
        }
        return LiteralField::create(
            'FieldsToFilterForSalesforce',
            '<h2>'.$title.'</h2><p>- '.implode('</p><p>', $htmlArray).'</p>'
        );
    }

    /**
     *
     * @param  array|DataList|null $mixed fields to send
     *
     * @return array
     */
    public static function get_fields_to_send($mixed = null)
    {
        $array = self::mixed_to_array($mixed);

        return array_merge(
            Config::inst()->get('SalesforceDefaultContactField', 'site_wide_fields_to_send'),
            $array
        );
    }

    /**
     *
     * @param  array|DataList|null $mixed fields to send
     *
     * @return array|DataList|null
     */
    public static function get_fields_for_filter($mixed = null)
    {
        $array = self::mixed_to_array($mixed);

        return array_merge(
            Config::inst()->get('SalesforceDefaultContactField', 'site_wide_filter_values'),
            $array
        );
    }

    protected static function mixed_to_array($mixed = null)
    {
        if($mixed === null) {
            $array = [];
        }
        elseif($mixed instanceof DataList) {
            $array = [];
            foreach($mixed as $object) {
                $array[trim($object->Field)] = $object->BetterValue();
            }
        } elseif(! is_array($array)) {
            user_error('Variable '.vardump($mixed).'Should be an array');
        }

        return $array;
    }


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


    public function requireDefaultRecords()
    {
        foreach($this->Config()->get('default_records') as $key => $value) {
            $filter = [
                'Key' => $key
            ];

            $obj = SalesforceDefaultContactField::get()->filter($filter)->first();
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

        return trim($this->Value);
    }



}
