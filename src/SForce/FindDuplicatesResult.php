<?php

namespace SForce\Wsdl;

class FindDuplicatesResult
{

    /**
     * @var DuplicateResult[] $duplicateResults
     */
    protected $duplicateResults = null;

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
     * @return DuplicateResult[]
     */
    public function getDuplicateResults()
    {
      return $this->duplicateResults;
    }

    /**
     * @param DuplicateResult[] $duplicateResults
     * @return \SForce\Wsdl\FindDuplicatesResult
     */
    public function setDuplicateResults(array $duplicateResults = null)
    {
      $this->duplicateResults = $duplicateResults;
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
     * @return \SForce\Wsdl\FindDuplicatesResult
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
     * @return \SForce\Wsdl\FindDuplicatesResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
