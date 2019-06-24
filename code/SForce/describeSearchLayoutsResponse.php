<?php

namespace SForce\Wsdl;

class describeSearchLayoutsResponse
{

    /**
     * @var DescribeSearchLayoutResult $result
     */
    protected $result = null;

    /**
     * @param DescribeSearchLayoutResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeSearchLayoutResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeSearchLayoutResult $result
     * @return \SForce\Wsdl\describeSearchLayoutsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
