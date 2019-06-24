<?php

namespace SForce\Wsdl;

class PicklistForRecordType
{

    /**
     * @var string $picklistName
     */
    protected $picklistName = null;

    /**
     * @var PicklistEntry[] $picklistValues
     */
    protected $picklistValues = null;

    /**
     * @param string $picklistName
     */
    public function __construct($picklistName = null)
    {
      $this->picklistName = $picklistName;
    }

    /**
     * @return string
     */
    public function getPicklistName()
    {
      return $this->picklistName;
    }

    /**
     * @param string $picklistName
     * @return \SForce\Wsdl\PicklistForRecordType
     */
    public function setPicklistName($picklistName)
    {
      $this->picklistName = $picklistName;
      return $this;
    }

    /**
     * @return PicklistEntry[]
     */
    public function getPicklistValues()
    {
      return $this->picklistValues;
    }

    /**
     * @param PicklistEntry[] $picklistValues
     * @return \SForce\Wsdl\PicklistForRecordType
     */
    public function setPicklistValues(array $picklistValues = null)
    {
      $this->picklistValues = $picklistValues;
      return $this;
    }

}
