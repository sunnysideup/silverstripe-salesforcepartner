<?php

namespace SForce\Wsdl;

class describeAllTabsResponse
{
    /**
     * @var DescribeTab
     */
    protected $result = null;

    /**
     * @param DescribeTab $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeTab
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeTab $result
     * @return \SForce\Wsdl\describeAllTabsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
