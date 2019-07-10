<?php


class SalesforceExamplesSignupController extends ContentController
{

    /**
     * todo: CHECK THIS IS RIGHT
     * @var array
     */
    private static $allowed_actions = array(
        'Form' => true
    );

    public function index()
    {
        return $this->renderWith(['SalesforceExamplesSignupController' , 'Page']);
    }

    public function Form()
    {
        return new SalesforceSignupForm($this, 'Form');
    }

}
