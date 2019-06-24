<?php

namespace SForce\Wsdl;

class QuickActionTemplateResult
{

    /**
     * @var string $contextId
     */
    protected $contextId = null;

    /**
     * @var sObject $defaultValueFormulas
     */
    protected $defaultValueFormulas = null;

    /**
     * @var sObject $defaultValues
     */
    protected $defaultValues = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var boolean $success
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
     * @return string
     */
    public function getContextId()
    {
      return $this->contextId;
    }

    /**
     * @param string $contextId
     * @return \SForce\Wsdl\QuickActionTemplateResult
     */
    public function setContextId($contextId)
    {
      $this->contextId = $contextId;
      return $this;
    }

    /**
     * @return sObject
     */
    public function getDefaultValueFormulas()
    {
      return $this->defaultValueFormulas;
    }

    /**
     * @param sObject $defaultValueFormulas
     * @return \SForce\Wsdl\QuickActionTemplateResult
     */
    public function setDefaultValueFormulas($defaultValueFormulas)
    {
      $this->defaultValueFormulas = $defaultValueFormulas;
      return $this;
    }

    /**
     * @return sObject
     */
    public function getDefaultValues()
    {
      return $this->defaultValues;
    }

    /**
     * @param sObject $defaultValues
     * @return \SForce\Wsdl\QuickActionTemplateResult
     */
    public function setDefaultValues($defaultValues)
    {
      $this->defaultValues = $defaultValues;
      return $this;
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
     * @return \SForce\Wsdl\QuickActionTemplateResult
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
     * @return \SForce\Wsdl\QuickActionTemplateResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
