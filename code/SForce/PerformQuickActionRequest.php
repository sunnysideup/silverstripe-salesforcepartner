<?php

namespace SForce\Wsdl;

class PerformQuickActionRequest
{

    /**
     * @var ID $contextId
     */
    protected $contextId = null;

    /**
     * @var string $quickActionName
     */
    protected $quickActionName = null;

    /**
     * @var sObject[] $records
     */
    protected $records = null;

    /**
     * @param string $quickActionName
     */
    public function __construct($quickActionName = null)
    {
      $this->quickActionName = $quickActionName;
    }

    /**
     * @return ID
     */
    public function getContextId()
    {
      return $this->contextId;
    }

    /**
     * @param ID $contextId
     * @return \SForce\Wsdl\PerformQuickActionRequest
     */
    public function setContextId($contextId)
    {
      $this->contextId = $contextId;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuickActionName()
    {
      return $this->quickActionName;
    }

    /**
     * @param string $quickActionName
     * @return \SForce\Wsdl\PerformQuickActionRequest
     */
    public function setQuickActionName($quickActionName)
    {
      $this->quickActionName = $quickActionName;
      return $this;
    }

    /**
     * @return sObject[]
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param sObject[] $records
     * @return \SForce\Wsdl\PerformQuickActionRequest
     */
    public function setRecords(array $records = null)
    {
      $this->records = $records;
      return $this;
    }

}
