# Purpose

It connects a Silverstripe Install to a Sales Force account using the Partner "approach".



# Install

 1. add your wsdl file to your mysite folder and make sure it is protected, see below
 2. add to Silverstripe install as per usual
 3. see: `salesforcepartner/_config/salesforceconfig.yml.example` and implement in mysite
   as you see fit. You will definitely need to set the login credentials

# Getting Credentials

## username and password

The same as you use for logging in to the online CMS for Sales Force

## security token

Login to Sales Force CMS and follow these instructions
https://webkul.com/blog/security-token-salesforce/


# Usage

Please visit `code/Api/Contact` folder to see the public methods that will be of use to you.

You should set up dataobjects / pages with the following methods:
```php
    /**
     * @var array
     */
    private static $many_many = [
        'SalesforceDefaultCreateContactFields' => 'SalesforceDefaultContactField',
        'SalesforceDefaultUpdateContactFields' => 'SalesforceDefaultContactField',
        'SalesforceDefaultContactFilters' => 'SalesforceDefaultContactField',
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $this->setDefaultFieldsForSalesforce();
        $fields->addFieldsToTab(
            'Root.SalesforceSettings',
            MySalesforceContactConfigApiFormFields::all_fields(
                $this,
                'SalesforceDefaultCreateContactFields',
                'SalesforceDefaultUpdateContactFields',
                'SalesforceDefaultContactFilters'
            )
        );

        return $fields;
    }

    public function setDefaultFieldsForSalesforce()
    {
        // Send info to Salesforce if the user has opted in
        MySalesforceContactConfigApi::add_fields_to_send_on_creation(
            $this->SalesforceDefaultCreateContactFields()
        );
        MySalesforceContactConfigApi::add_fields_to_send_on_update(
            $this->SalesforceDefaultUpdateContactFields()
        );
        MySalesforceContactConfigApi::add_fields_to_use_for_filter(
            $this->SalesforceDefaultContactFilters()
        );
    }

```

set up controller with the following form:

```php

    /**
     * @return mixed
     */
    public function MySalesforceForm()
    {
        $this->setDefaultFieldsForSalesforce();

        $form = new MySalesforceForm($this);

        return $form;

    }
```

In the `MySalesforceForm` form, add the following:

```php

    public function sendToSalesforce(
        $email, $phoneNumber = '', $firstName = '', $lastName = '', $extraFields = [], $extraFilterFields = []
    ) {
        if (MySalesforceContactApi::is_email_registered($email, $extraFilterFields)) {
            //update
            $success = MySalesforceContactApi::update_email_subscriber(
                $email,
                $extraFields,
                $extraFilterFields
            );
        } else {
            //add
            $success = MySalesforceContactApi::add_email_subscriber(
                $email,
                $phoneNumber,
                $firstName,
                $lastName,
                $extraFields,
                $extraFilterFields
            );
        }

        return $success;

    }

```


# About the SForce Folder

This folder is automagically created by the `uuf6429/force.com-toolkit-for-php`
vendor package.  You can set the details in composer.json.

## changed files in the SForce Folder

changed due to double class names (both lowercase and upper case existed):
 - describeApprovalLayoutDouble
 - describeGlobalThemeDouble.php
 - describeLayoutDouble.php

## key file
code/SForce/SforceService.php



# Useful Links

#### Basic starting point
- https://developer.salesforce.com/index.php?title=Getting_Started_with_the_Force.com_Toolkit_for_PHP&oldid=51397

#### Actual SDK we are using
- https://github.com/uuf6429/Force.com-Toolkit-for-PHP

##### This is based on ...
- https://github.com/developerforce/Force.com-Toolkit-for-PHP

#### Examples
- https://github.com/developerforce/Force.com-Toolkit-for-PHP/blob/master/test/SforcePartnerClientTest.php
- https://www.jitendrazaa.com/blog/salesforce/salesforce-toolkit-for-php/
