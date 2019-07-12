<?php

namespace SForce\Wsdl;

class describePathAssistantsResponse
{
    /**
     * @var DescribePathAssistantsResult
     */
    protected $result = null;

    /**
     * @param DescribePathAssistantsResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribePathAssistantsResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribePathAssistantsResult $result
     * @return \SForce\Wsdl\describePathAssistantsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
