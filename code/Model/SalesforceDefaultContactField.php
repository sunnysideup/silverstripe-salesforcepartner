<?php

use SilverStripe\Forms\DropdownField;
/**
 * this can be linked to pages / other objects using many_many relationships
 * so that you can send default record values to Salesforce.
 * It is NOT for user specific ones, but for generic fields.
 *
 * This class knows what format salesforce expects.
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
        'ValueType' => 'Enum("String,Number,YesOrTrue,NoOrFalse,CurrentDate,CurrentDateAndTime", "String")',
    ];

    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    private static $summary_fields = [
        'Key' => 'Field Name',
        'Value' => 'Field Value',
        'ValueType' => 'Value Type',
    ];
    /**
     * Defines summary fields commonly used in table columns
     * as a quick overview of the data for this dataobject
     * @var array
     */
    /**
     * Defines a default list of filters for the search context
     * @var array
     */
    private static $searchable_fields = [
        'Key',
        'Value',
        'ValueType',
    ];

    /**
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Key . ' = '.$this->BetterValueHumanReadable() . ' ('.$this->ValueType.')';
    }


    public function requireDefaultRecords()
    {
        foreach($this->Config()->get('default_records') as $key => $details) {
            $value = isset($details['Value']) ? $details['Value'] : 'please set' ;
            $type = isset($details['ValueType']) ? $details['Value'] : 'String' ;
            $type = $details['ValueType'];
            $filter = [
                'Key' => $key
            ];

            $obj = SalesforceDefaultContactField::get()->filter($filter)->first();
            if(! $obj) {
                $obj = SalesforceDefaultContactField::create($filter);
                $obj->Value = $value;
                $obj->ValueType = $type;
                $obj->write();
            }

        }
    }

    /**
     * @return mixed
     */
    public function BetterValue()
    {
        switch($this->ValueType) {
            case 'Number':
                return floatval($this->Value);
            case 'CurrentDate':
                return Date('Y-m-d');
            case 'CurrentDateAndTime':
                return Date('Y-m-d h:i:s');
            case 'YesOrTrue':
                return 'true';
            case 'NoOrFalse':
                return 'false';
            default:
                return trim($this->Value);
        }
    }

    /**
     * @return mixed
     */
    public function BetterValueHumanReadable()
    {
        return $this->BetterValue();
    }

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
                TextField::create(
                    'Value',
                    'Value'
                ),
                DropdownField::create(
                    'ValueType',
                    'Type / Predefined Value',
                    $this->dbObject('ValueType')->enumValues()
                ),
                ReadonlyField::create(
                    'BetterValueHumanReadableNice',
                    'Calculated Value',
                    $this->BetterValueHumanReadable()
                ),
            ]
        );
        switch($this->ValueType) {
            case 'CurrentDate':
            case 'CurrentDateAndTime':
            case 'YesOrTrue':
            case 'NoOrFalse':
                $fields->removeFieldFromTab(
                    'Root.Main',
                    'Value'
                );
            case 'Number':
                $fields->removeFieldFromTab(
                    'Root.Main',
                    NumericField::create('Value', 'Value')
                );
        }
        return $fields;
    }


}
