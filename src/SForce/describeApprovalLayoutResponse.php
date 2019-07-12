<?php

namespace SForce\Wsdl;

class describeApprovalLayoutResponse
{
    /**
     * @var DescribeApprovalLayoutResult
     */
    protected $result = null;

    /**
     * @param DescribeApprovalLayoutResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeApprovalLayoutResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeApprovalLayoutResult $result
     * @return \SForce\Wsdl\describeApprovalLayoutResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
