<?php

/**
 * This class can be used by controllers in your project to set up a basic sign up
 * form.
 *
 * You can test it in isolation using the SalesForceExamplesSignupController class.
 */

class SalesForceSignupForm extends Form
{

    private static $allowed_actions = [
        'doSalesForceSignUp' => true
    ];

    private static $based_on_instance_of = 'SalesForceContact';

    /**
     * Our constructor only requires the controller and the name of the form
     * method. We'll create the fields and actions in here.
     *
     */
    public function __construct($controller, $name)
    {
        $fields = $this->getBaseFields();

        $actions = $this->getBaseAction();

        $required = $this->getBaseRequiredFields();

        // now we create the actual form with our fields and actions defined
        // within this class
        parent::__construct($controller, $name, $fields, $actions, $required);

        // any modifications we need to make to the form.
        $this->loadDataFrom($_REQUEST);
    }


    public function setSigupFields(array $fieldArray)
    {
        $newList = new FieldList();
        $oldFields = $this->Fields();
        foreach($fieldsArray as $field) {
            $newField = $oldFields->dataFieldByName($field);
            $newList->push($newField);
        }

        $this->setFields($newList);

        return $this;
    }

    public function setRequiredFields(array $fieldArray)
    {
        $this->setRequiredFields(new RequiredFields($fieldArray));

        return $this;
    }


    public function setFormSubmitText(string $label)
    {
        $newFields = new FieldList(
            FormAction::create('doSalesForceSignUp', $label)
        );
        $this->setActions($newFields);

        return $this;
    }

    protected function getBaseFields()
    {
        $newInstanceClassName = Config::inst()->get('SalesForceSignupForm', 'based_on_instance_of');
        $newInstance = $newInstanceClassName::create();

        return $newInstance->getFrontEndFields();

    }

    protected function getBaseAction()
    {
        return new FieldList(
            FormAction::create('doSalesForceSignUp', 'Register')
        );
    }

    protected function getBaseRequiredFields()
    {
        new RequiredFields(
            [
                'FirstName',
                'LastName',
                'Email',
            ]
        );
    }


    public function doSalesForceSignUp($data, Form $form)
    {
        MySalesForcePartnerAPI::create_contact($data);
        die('We need the option here to set a redirection link AND/OR provide an AJAX response');
    }


}
