<?php

namespace SForce\Wsdl;

class DescribePathAssistantStep
{

    /**
     * @var boolean $closed
     */
    protected $closed = null;

    /**
     * @var boolean $converted
     */
    protected $converted = null;

    /**
     * @var DescribePathAssistantField[] $fields
     */
    protected $fields = null;

    /**
     * @var string $info
     */
    protected $info = null;

    /**
     * @var DescribeLayoutSection $layoutSection
     */
    protected $layoutSection = null;

    /**
     * @var string $picklistLabel
     */
    protected $picklistLabel = null;

    /**
     * @var string $picklistValue
     */
    protected $picklistValue = null;

    /**
     * @var boolean $won
     */
    protected $won = null;

    /**
     * @param boolean $closed
     * @param boolean $converted
     * @param string $picklistLabel
     * @param string $picklistValue
     * @param boolean $won
     */
    public function __construct($closed = null, $converted = null, $picklistLabel = null, $picklistValue = null, $won = null)
    {
      $this->closed = $closed;
      $this->converted = $converted;
      $this->picklistLabel = $picklistLabel;
      $this->picklistValue = $picklistValue;
      $this->won = $won;
    }

    /**
     * @return boolean
     */
    public function getClosed()
    {
      return $this->closed;
    }

    /**
     * @param boolean $closed
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setClosed($closed)
    {
      $this->closed = $closed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConverted()
    {
      return $this->converted;
    }

    /**
     * @param boolean $converted
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setConverted($converted)
    {
      $this->converted = $converted;
      return $this;
    }

    /**
     * @return DescribePathAssistantField[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param DescribePathAssistantField[] $fields
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setFields(array $fields = null)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
      return $this->info;
    }

    /**
     * @param string $info
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setInfo($info)
    {
      $this->info = $info;
      return $this;
    }

    /**
     * @return DescribeLayoutSection
     */
    public function getLayoutSection()
    {
      return $this->layoutSection;
    }

    /**
     * @param DescribeLayoutSection $layoutSection
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setLayoutSection($layoutSection)
    {
      $this->layoutSection = $layoutSection;
      return $this;
    }

    /**
     * @return string
     */
    public function getPicklistLabel()
    {
      return $this->picklistLabel;
    }

    /**
     * @param string $picklistLabel
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setPicklistLabel($picklistLabel)
    {
      $this->picklistLabel = $picklistLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getPicklistValue()
    {
      return $this->picklistValue;
    }

    /**
     * @param string $picklistValue
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setPicklistValue($picklistValue)
    {
      $this->picklistValue = $picklistValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWon()
    {
      return $this->won;
    }

    /**
     * @param boolean $won
     * @return \SForce\Wsdl\DescribePathAssistantStep
     */
    public function setWon($won)
    {
      $this->won = $won;
      return $this;
    }

}
