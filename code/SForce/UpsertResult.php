<?php

namespace SForce\Wsdl;

class UpsertResult
{

    /**
     * @var boolean $created
     */
    protected $created = null;

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
     * @param boolean $created
     * @param boolean $success
     */
    public function __construct($created = null, $success = null)
    {
      $this->created = $created;
      $this->success = $success;
    }

    /**
     * @return boolean
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param boolean $created
     * @return \SForce\Wsdl\UpsertResult
     */
    public function setCreated($created)
    {
      $this->created = $created;
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
     * @return \SForce\Wsdl\UpsertResult
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
     * @return \SForce\Wsdl\UpsertResult
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
     * @return \SForce\Wsdl\UpsertResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
