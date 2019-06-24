<?php

namespace SForce\Wsdl;

class DescribeLayoutSaveOption
{

    /**
     * @var boolean $defaultValue
     */
    protected $defaultValue = null;

    /**
     * @var boolean $isDisplayed
     */
    protected $isDisplayed = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $restHeaderName
     */
    protected $restHeaderName = null;

    /**
     * @var string $soapHeaderName
     */
    protected $soapHeaderName = null;

    /**
     * @param boolean $defaultValue
     * @param boolean $isDisplayed
     * @param string $label
     * @param string $name
     * @param string $restHeaderName
     * @param string $soapHeaderName
     */
    public function __construct($defaultValue = null, $isDisplayed = null, $label = null, $name = null, $restHeaderName = null, $soapHeaderName = null)
    {
      $this->defaultValue = $defaultValue;
      $this->isDisplayed = $isDisplayed;
      $this->label = $label;
      $this->name = $name;
      $this->restHeaderName = $restHeaderName;
      $this->soapHeaderName = $soapHeaderName;
    }

    /**
     * @return boolean
     */
    public function getDefaultValue()
    {
      return $this->defaultValue;
    }

    /**
     * @param boolean $defaultValue
     * @return \SForce\Wsdl\DescribeLayoutSaveOption
     */
    public function setDefaultValue($defaultValue)
    {
      $this->defaultValue = $defaultValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDisplayed()
    {
      return $this->isDisplayed;
    }

    /**
     * @param boolean $isDisplayed
     * @return \SForce\Wsdl\DescribeLayoutSaveOption
     */
    public function setIsDisplayed($isDisplayed)
    {
      $this->isDisplayed = $isDisplayed;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \SForce\Wsdl\DescribeLayoutSaveOption
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\DescribeLayoutSaveOption
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getRestHeaderName()
    {
      return $this->restHeaderName;
    }

    /**
     * @param string $restHeaderName
     * @return \SForce\Wsdl\DescribeLayoutSaveOption
     */
    public function setRestHeaderName($restHeaderName)
    {
      $this->restHeaderName = $restHeaderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoapHeaderName()
    {
      return $this->soapHeaderName;
    }

    /**
     * @param string $soapHeaderName
     * @return \SForce\Wsdl\DescribeLayoutSaveOption
     */
    public function setSoapHeaderName($soapHeaderName)
    {
      $this->soapHeaderName = $soapHeaderName;
      return $this;
    }

}
