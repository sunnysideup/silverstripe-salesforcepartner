<?php

namespace SForce\Wsdl;

class describeTabsResponse
{
    /**
     * @var DescribeTabSetResult
     */
    protected $result = null;

    /**
     * @param DescribeTabSetResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeTabSetResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeTabSetResult $result
     * @return \SForce\Wsdl\describeTabsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
