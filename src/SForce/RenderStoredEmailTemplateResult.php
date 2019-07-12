<?php

namespace SForce\Wsdl;

class RenderStoredEmailTemplateResult
{
    /**
     * @var Error[]
     */
    protected $errors = null;

    /**
     * @var SingleEmailMessage
     */
    protected $renderedEmail = null;

    /**
     * @var boolean
     */
    protected $success = null;

    /**
     * @param boolean $success
     */
    public function __construct($success = null)
    {
        $this->success = $success;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \SForce\Wsdl\RenderStoredEmailTemplateResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return SingleEmailMessage
     */
    public function getRenderedEmail()
    {
        return $this->renderedEmail;
    }

    /**
     * @param SingleEmailMessage $renderedEmail
     * @return \SForce\Wsdl\RenderStoredEmailTemplateResult
     */
    public function setRenderedEmail($renderedEmail)
    {
        $this->renderedEmail = $renderedEmail;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     * @return \SForce\Wsdl\RenderStoredEmailTemplateResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }
}
