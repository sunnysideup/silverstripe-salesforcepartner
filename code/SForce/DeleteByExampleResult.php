<?php

namespace SForce\Wsdl;

class DeleteByExampleResult
{
    /**
     * @var sObject
     */
    protected $entity = null;

    /**
     * @var Error[]
     */
    protected $errors = null;

    /**
     * @var int
     */
    protected $rowCount = null;

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
     * @return sObject
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param sObject $entity
     * @return \SForce\Wsdl\DeleteByExampleResult
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
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
     * @return \SForce\Wsdl\DeleteByExampleResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return int
     */
    public function getRowCount()
    {
        return $this->rowCount;
    }

    /**
     * @param int $rowCount
     * @return \SForce\Wsdl\DeleteByExampleResult
     */
    public function setRowCount($rowCount)
    {
        $this->rowCount = $rowCount;
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
     * @return \SForce\Wsdl\DeleteByExampleResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }
}
