<?php


class SalesForceExamplesSignupController extends ContentController
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
        return $this->renderWith(['SalesForceExamplesSignupController' , 'Page']);
    }

    public function Form()
    {
        return new SalesForceSignupForm($this, 'Form');
    }

}
