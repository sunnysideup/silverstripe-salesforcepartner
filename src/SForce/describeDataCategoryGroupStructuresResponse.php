<?php

namespace SForce\Wsdl;

class describeDataCategoryGroupStructuresResponse
{

    /**
     * @var DescribeDataCategoryGroupStructureResult $result
     */
    protected $result = null;

    /**
     * @param DescribeDataCategoryGroupStructureResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeDataCategoryGroupStructureResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeDataCategoryGroupStructureResult $result
     * @return \SForce\Wsdl\describeDataCategoryGroupStructuresResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
