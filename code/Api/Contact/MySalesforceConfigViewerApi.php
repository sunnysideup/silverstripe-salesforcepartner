<?php
/**
 * returns a bunch of form fields that inform the user about the configuration
 * of the connection and communication with Salesforce.
 */
class MySalesforceConfigViewerApi extends Object
{

    public static function list_of_contact_record_types(
        $fieldName = 'ListOfContactRecordTypes',
        $title = 'Contact Record Types Available'
    )
    {
        $data = MySalesforcePartnerApi::retrieve_contact_record_types();

        return LiteralField::create(
            'ListOfContactRecordTypes',
            '<h2>'.$title.'</h2>'.
            '<pre>'.print_r($data).'</pre>'
        );
    }

    /**
     * Needs to link to a many-many relationship (SalesforceDefaultContactFields)
     * @param  array $array fields to send
     *
     * @return CheckboxSetField
     */
    public static function select_field(
        $fieldName = 'SalesforceDefaultContactFields',
        $title = 'Select Default Fields'
    )
    {
        return CheckboxSetField::create(
            $fieldName,
            $title,
            SalesforceDefaultContactField::get()->map()->toArray()
        )
            ->setDescription('
                Select the default fields that are always sent to Salesforce
                when a contact signs up from this page.
                <br />
                <br />
                You can
                <a href="/admin/salesforceadmin/'.SalesforceDefaultContactField::class.'/">Add or Edit the options</a>
                as required.
                Please change with care.
            ');
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
        $array = SalesforceDefaultContactField::get_fields_to_send($mixed);
        return LiteralField::create(
            'FieldsToSendToSalesforce',
            '<h2>'.$title.'</h2>'.
            self::array_to_html($array)
        );
    }
    /**
     *
     * @param  array|DataList|null $mixed fields to send
     * @param  string $title fields to send
     *
     * @return LiteralField
     */
    public static function fields_to_filter_field(
        $mixed = null,
        $title  = 'Filter Fields'
    )
    {
        $array = SalesforceDefaultContactField::get_fields_to_send($mixed);
        return LiteralField::create(
            'FieldsToFilterForSalesforce',
            '<h2>'.$title.'</h2>'.
            self::array_to_html($array)
        );
    }

    /**
     *
     * @param  [type] $array [description]
     * @return [type]        [description]
     */
    protected static function array_to_html($array) : string
    {
        $htmlArray = [];
        foreach($array as $field => $value) {
            $htmlArray[] = $field.' = '.$value.' ('.gettype($value).')';
        }
        if(count($htmlArray) == 0) {
            $htmlArray[] = 'none';
        }

        return '<p>- '.implode('</p><p> - ', $htmlArray).'</p>';
    }
}
