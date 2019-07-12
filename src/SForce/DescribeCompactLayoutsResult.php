<?php

namespace SForce\Wsdl;

class DescribeCompactLayoutsResult
{

    /**
     * @var DescribeCompactLayout[] $compactLayouts
     */
    protected $compactLayouts = null;

    /**
     * @var ID $defaultCompactLayoutId
     */
    protected $defaultCompactLayoutId = null;

    /**
     * @var RecordTypeCompactLayoutMapping[] $recordTypeCompactLayoutMappings
     */
    protected $recordTypeCompactLayoutMappings = null;

    /**
     * @param DescribeCompactLayout[] $compactLayouts
     * @param ID $defaultCompactLayoutId
     */
    public function __construct(array $compactLayouts = null, $defaultCompactLayoutId = null)
    {
      $this->compactLayouts = $compactLayouts;
      $this->defaultCompactLayoutId = $defaultCompactLayoutId;
    }

    /**
     * @return DescribeCompactLayout[]
     */
    public function getCompactLayouts()
    {
      return $this->compactLayouts;
    }

    /**
     * @param DescribeCompactLayout[] $compactLayouts
     * @return \SForce\Wsdl\DescribeCompactLayoutsResult
     */
    public function setCompactLayouts(array $compactLayouts)
    {
      $this->compactLayouts = $compactLayouts;
      return $this;
    }

    /**
     * @return ID
     */
    public function getDefaultCompactLayoutId()
    {
      return $this->defaultCompactLayoutId;
    }

    /**
     * @param ID $defaultCompactLayoutId
     * @return \SForce\Wsdl\DescribeCompactLayoutsResult
     */
    public function setDefaultCompactLayoutId($defaultCompactLayoutId)
    {
      $this->defaultCompactLayoutId = $defaultCompactLayoutId;
      return $this;
    }

    /**
     * @return RecordTypeCompactLayoutMapping[]
     */
    public function getRecordTypeCompactLayoutMappings()
    {
      return $this->recordTypeCompactLayoutMappings;
    }

    /**
     * @param RecordTypeCompactLayoutMapping[] $recordTypeCompactLayoutMappings
     * @return \SForce\Wsdl\DescribeCompactLayoutsResult
     */
    public function setRecordTypeCompactLayoutMappings(array $recordTypeCompactLayoutMappings = null)
    {
      $this->recordTypeCompactLayoutMappings = $recordTypeCompactLayoutMappings;
      return $this;
    }

}
