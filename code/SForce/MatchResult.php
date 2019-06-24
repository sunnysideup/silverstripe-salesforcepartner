<?php

namespace SForce\Wsdl;

class MatchResult
{

    /**
     * @var string $entityType
     */
    protected $entityType = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var string $matchEngine
     */
    protected $matchEngine = null;

    /**
     * @var MatchRecord[] $matchRecords
     */
    protected $matchRecords = null;

    /**
     * @var string $rule
     */
    protected $rule = null;

    /**
     * @var int $size
     */
    protected $size = null;

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @param string $entityType
     * @param string $matchEngine
     * @param string $rule
     * @param int $size
     * @param boolean $success
     */
    public function __construct($entityType = null, $matchEngine = null, $rule = null, $size = null, $success = null)
    {
      $this->entityType = $entityType;
      $this->matchEngine = $matchEngine;
      $this->rule = $rule;
      $this->size = $size;
      $this->success = $success;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
      return $this->entityType;
    }

    /**
     * @param string $entityType
     * @return \SForce\Wsdl\MatchResult
     */
    public function setEntityType($entityType)
    {
      $this->entityType = $entityType;
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
     * @return \SForce\Wsdl\MatchResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchEngine()
    {
      return $this->matchEngine;
    }

    /**
     * @param string $matchEngine
     * @return \SForce\Wsdl\MatchResult
     */
    public function setMatchEngine($matchEngine)
    {
      $this->matchEngine = $matchEngine;
      return $this;
    }

    /**
     * @return MatchRecord[]
     */
    public function getMatchRecords()
    {
      return $this->matchRecords;
    }

    /**
     * @param MatchRecord[] $matchRecords
     * @return \SForce\Wsdl\MatchResult
     */
    public function setMatchRecords(array $matchRecords = null)
    {
      $this->matchRecords = $matchRecords;
      return $this;
    }

    /**
     * @return string
     */
    public function getRule()
    {
      return $this->rule;
    }

    /**
     * @param string $rule
     * @return \SForce\Wsdl\MatchResult
     */
    public function setRule($rule)
    {
      $this->rule = $rule;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param int $size
     * @return \SForce\Wsdl\MatchResult
     */
    public function setSize($size)
    {
      $this->size = $size;
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
     * @return \SForce\Wsdl\MatchResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
