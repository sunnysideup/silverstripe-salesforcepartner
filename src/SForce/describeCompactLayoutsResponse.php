<?php

namespace SForce\Wsdl;

class describeCompactLayoutsResponse
{
    /**
     * @var DescribeCompactLayoutsResult
     */
    protected $result = null;

    /**
     * @param DescribeCompactLayoutsResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeCompactLayoutsResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeCompactLayoutsResult $result
     * @return \SForce\Wsdl\describeCompactLayoutsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
