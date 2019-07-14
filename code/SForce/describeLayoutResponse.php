<?php

namespace SForce\Wsdl;

class describeLayoutResponse
{
    /**
     * @var DescribeLayoutResult
     */
    protected $result = null;

    /**
     * @param DescribeLayoutResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeLayoutResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeLayoutResult $result
     * @return \SForce\Wsdl\describeLayoutResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
