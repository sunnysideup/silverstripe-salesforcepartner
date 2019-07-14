<?php
/**
 * returns a bunch of form fields that inform the user about the configuration
 * of the connection and communication with Salesforce.
 */
class MySalesforceContactConfigApiFormFields extends Object
{

    /**
     * return all the fields displaying configuration
     *
     * @param  DataObject $dataObject
     * @param  string $createFieldsMethod
     * @param  string $updateFieldsMethod
     * @param  string $filterFieldsMethod
     *
     * @return array
     */
    public static function all_fields(
        $dataObject,
        $createFieldsMethod,
        $updateFieldsMethod,
        $filterFieldsMethod
    )
    {
        return [
            self::fields_to_send_field(
                'create',
                $dataObject->$createFieldsMethod()
            ),

            self::select_default_contact_fields_field(
                $createFieldsMethod,
                'Select ...'
            ),

            self::fields_to_send_field(
                'update',
                $dataObject->$updateFieldsMethod()
            ),

            self::select_default_contact_fields_field(
                $updateFieldsMethod,
                'Select ...'
            ),

            self::fields_to_send_field(
                'filter',
                $dataObject->$filterFieldsMethod()
            ),

            self::select_default_contact_fields_field(
                $filterFieldsMethod,
                'Select ...'
            ),

            self::list_of_contact_record_types_field(),

            self::login_details_field(),
        ];
    }

    public static function login_details_field(
        $title = 'Account Used',
        $fieldName = 'SalesforceLoginDetailsField'
    )
    {
        $userName = Config::inst()->get('MySalesforcePartnerApiConnectionOnly', 'username');
        $password = Config::inst()->get('MySalesforcePartnerApiConnectionOnly', 'password');
        $security_token = Config::inst()->get('MySalesforcePartnerApiConnectionOnly', 'security_token');
        $wsdl_location = Config::inst()->get('MySalesforcePartnerApiConnectionOnly', 'wsdl_location');
        $array = [
            'UserName' => $userName,
            'Password' => substr($password, 0, 2) . '...'.substr($password,  -2),
            'Token' => substr($security_token, 0, 2) . '...'.substr($security_token,  -2),
            'WSDLLocation' => $wsdl_location,
        ];
        return LiteralField::create(
            $fieldName,
            '<h2>'.$title.'</h2>'.
            self::array_to_html($array)
        );
    }
    /**
     * Field with list of contact record types shown
     * @param  string $fieldName
     * @param  string $title
     *
     * @return LiteralField
     */
    public static function list_of_contact_record_types_field(
        $fieldName = 'ListOfContactRecordTypes',
        $title = 'Contact Record Types Available'
    )
    {
        $data = MySalesforceContactApi::retrieve_contact_record_types();

        return LiteralField::create(
            $fieldName,
            '<h2>'.$title.'</h2>'.
            '<pre>'.print_r($data, 1).'</pre>'
        );
    }

    /**
     * Needs to link to a many-many relationship (SalesforceDefaultContactFields)
     * @param  array $array fields to send
     *
     * @return FormField
     */
    public static function select_default_contact_fields_field($fieldName, $title, $desc = '')
    {
        $count = SalesforceDefaultContactField::get()->count();
        if($count === 0) {
            return HiddenField::create(
                $fieldName,
                $title
            );
        }
        return CheckboxSetField::create(
            $fieldName,
            $title,
            SalesforceDefaultContactField::get()->map()->toArray()
        )
            ->setDescription('
                '.$desc.'
                <br />
                You can
                <a href="/admin/salesforceadmin/'.SalesforceDefaultContactField::class.'/">Add or Edit the options</a>
                as required. Please change with care.
            ');
    }

    /**
     *
     * @param  array|DataList|null $array fields to send
     * @param  string $fieldName fields to send
     * @param  string $title fields to send
     *
     * @return LiteralField
     */
    public static function fields_to_send_field(
        $type,
        $mixed = null,
        $fieldName = 'FieldsToSendToSalesforce',
        $title  = 'Default Fields for'
    )
    {
        $fieldName .= ucfirst($type);
        $title .= ' '.ucfirst($type);

        $array = [];
        switch( $type ) {
            case 'create':
                $array = MySalesforceContactConfigApi::get_fields_to_send_on_creation($mixed);
                break;
            case 'update':
                $array = MySalesforceContactConfigApi::get_fields_to_send_on_update($mixed);
                break;
            case 'filter':
                $array = MySalesforceContactConfigApi::get_fields_for_filter($mixed);
                break;
            default:
                user_error('type needs to be create, update or filter - currently set to: '.$type);
                break;
        }
        return LiteralField::create(
            $fieldName,
            '<h2>'.$title.'</h2>'.
            self::array_to_html($array)
        );
    }

    /**
     * @param  array $array
     *
     * @return string (html)
     */
    protected static function array_to_html($array)
    {
        $htmlArray = [];
        foreach($array as $field => $value) {
            $htmlArray[] = $field.' = '.$value;
        }
        if(count($htmlArray) == 0) {
            $htmlArray[] = 'none';
        }

        return '<p>- '.implode('</p><p> - ', $htmlArray).'</p>';
    }
}
