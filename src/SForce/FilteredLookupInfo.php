<?php

namespace SForce\Wsdl;

class FilteredLookupInfo
{

    /**
     * @var string[] $controllingFields
     */
    protected $controllingFields = null;

    /**
     * @var boolean $dependent
     */
    protected $dependent = null;

    /**
     * @var boolean $optionalFilter
     */
    protected $optionalFilter = null;

    /**
     * @param boolean $dependent
     * @param boolean $optionalFilter
     */
    public function __construct($dependent = null, $optionalFilter = null)
    {
      $this->dependent = $dependent;
      $this->optionalFilter = $optionalFilter;
    }

    /**
     * @return string[]
     */
    public function getControllingFields()
    {
      return $this->controllingFields;
    }

    /**
     * @param string[] $controllingFields
     * @return \SForce\Wsdl\FilteredLookupInfo
     */
    public function setControllingFields(array $controllingFields = null)
    {
      $this->controllingFields = $controllingFields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDependent()
    {
      return $this->dependent;
    }

    /**
     * @param boolean $dependent
     * @return \SForce\Wsdl\FilteredLookupInfo
     */
    public function setDependent($dependent)
    {
      $this->dependent = $dependent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptionalFilter()
    {
      return $this->optionalFilter;
    }

    /**
     * @param boolean $optionalFilter
     * @return \SForce\Wsdl\FilteredLookupInfo
     */
    public function setOptionalFilter($optionalFilter)
    {
      $this->optionalFilter = $optionalFilter;
      return $this;
    }

}
