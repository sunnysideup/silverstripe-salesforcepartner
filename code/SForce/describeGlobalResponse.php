<?php

namespace SForce\Wsdl;

class describeGlobalResponse
{
    /**
     * @var DescribeGlobalResult
     */
    protected $result = null;

    /**
     * @param DescribeGlobalResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeGlobalResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeGlobalResult $result
     * @return \SForce\Wsdl\describeGlobalResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
