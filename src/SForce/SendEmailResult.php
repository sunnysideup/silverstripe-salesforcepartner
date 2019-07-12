<?php

namespace SForce\Wsdl;

class SendEmailResult
{
    /**
     * @var SendEmailError[]
     */
    protected $errors = null;

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
     * @return SendEmailError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param SendEmailError[] $errors
     * @return \SForce\Wsdl\SendEmailResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
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
     * @return \SForce\Wsdl\SendEmailResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }
}
