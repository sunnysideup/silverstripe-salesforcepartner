<?php

namespace SForce\Wsdl;

class describeQuickActionsResponse
{
    /**
     * @var DescribeQuickActionResult
     */
    protected $result = null;

    /**
     * @param DescribeQuickActionResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeQuickActionResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeQuickActionResult $result
     * @return \SForce\Wsdl\describeQuickActionsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
