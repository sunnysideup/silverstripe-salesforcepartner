<?php

namespace SForce\Wsdl;

class describeVisualForceResponse
{
    /**
     * @var DescribeVisualForceResult
     */
    protected $result = null;

    /**
     * @param DescribeVisualForceResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeVisualForceResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeVisualForceResult $result
     * @return \SForce\Wsdl\describeVisualForceResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
