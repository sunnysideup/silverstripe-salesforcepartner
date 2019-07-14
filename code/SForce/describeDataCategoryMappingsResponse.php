<?php

namespace SForce\Wsdl;

class describeDataCategoryMappingsResponse
{
    /**
     * @var DescribeDataCategoryMappingResult
     */
    protected $result = null;

    /**
     * @param DescribeDataCategoryMappingResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeDataCategoryMappingResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeDataCategoryMappingResult $result
     * @return \SForce\Wsdl\describeDataCategoryMappingsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
