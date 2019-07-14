<?php

namespace SForce\Wsdl;

class describePrimaryCompactLayoutsResponse
{
    /**
     * @var DescribeCompactLayout
     */
    protected $result = null;

    /**
     * @param DescribeCompactLayout $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeCompactLayout
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeCompactLayout $result
     * @return \SForce\Wsdl\describePrimaryCompactLayoutsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
