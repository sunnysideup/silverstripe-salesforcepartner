<?php

namespace SForce\Wsdl;

class DescribeLayoutResult
{

    /**
     * @var DescribeLayout[] $layouts
     */
    protected $layouts = null;

    /**
     * @var RecordTypeMapping[] $recordTypeMappings
     */
    protected $recordTypeMappings = null;

    /**
     * @var boolean $recordTypeSelectorRequired
     */
    protected $recordTypeSelectorRequired = null;

    /**
     * @param DescribeLayout[] $layouts
     * @param boolean $recordTypeSelectorRequired
     */
    public function __construct(array $layouts = null, $recordTypeSelectorRequired = null)
    {
      $this->layouts = $layouts;
      $this->recordTypeSelectorRequired = $recordTypeSelectorRequired;
    }

    /**
     * @return DescribeLayout[]
     */
    public function getLayouts()
    {
      return $this->layouts;
    }

    /**
     * @param DescribeLayout[] $layouts
     * @return \SForce\Wsdl\DescribeLayoutResult
     */
    public function setLayouts(array $layouts)
    {
      $this->layouts = $layouts;
      return $this;
    }

    /**
     * @return RecordTypeMapping[]
     */
    public function getRecordTypeMappings()
    {
      return $this->recordTypeMappings;
    }

    /**
     * @param RecordTypeMapping[] $recordTypeMappings
     * @return \SForce\Wsdl\DescribeLayoutResult
     */
    public function setRecordTypeMappings(array $recordTypeMappings = null)
    {
      $this->recordTypeMappings = $recordTypeMappings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecordTypeSelectorRequired()
    {
      return $this->recordTypeSelectorRequired;
    }

    /**
     * @param boolean $recordTypeSelectorRequired
     * @return \SForce\Wsdl\DescribeLayoutResult
     */
    public function setRecordTypeSelectorRequired($recordTypeSelectorRequired)
    {
      $this->recordTypeSelectorRequired = $recordTypeSelectorRequired;
      return $this;
    }

}
