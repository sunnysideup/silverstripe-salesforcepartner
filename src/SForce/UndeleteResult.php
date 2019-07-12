<?php

namespace SForce\Wsdl;

class UndeleteResult
{

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var ID $id
     */
    protected $id = null;

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
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \SForce\Wsdl\UndeleteResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \SForce\Wsdl\UndeleteResult
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \SForce\Wsdl\UndeleteResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}