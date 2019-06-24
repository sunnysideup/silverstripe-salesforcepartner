<?php

namespace SForce\Wsdl;

class describeDataCategoryGroupsResponse
{

    /**
     * @var DescribeDataCategoryGroupResult $result
     */
    protected $result = null;

    /**
     * @param DescribeDataCategoryGroupResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeDataCategoryGroupResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeDataCategoryGroupResult $result
     * @return \SForce\Wsdl\describeDataCategoryGroupsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
