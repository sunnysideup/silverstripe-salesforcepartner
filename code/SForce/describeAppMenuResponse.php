<?php

namespace SForce\Wsdl;

class describeAppMenuResponse
{

    /**
     * @var DescribeAppMenuResult $result
     */
    protected $result = null;

    /**
     * @param DescribeAppMenuResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeAppMenuResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeAppMenuResult $result
     * @return \SForce\Wsdl\describeAppMenuResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
