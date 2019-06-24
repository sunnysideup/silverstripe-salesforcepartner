<?php

namespace SForce\Wsdl;

class describeNounsResponse
{

    /**
     * @var DescribeNounResult $result
     */
    protected $result = null;

    /**
     * @param DescribeNounResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeNounResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeNounResult $result
     * @return \SForce\Wsdl\describeNounsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
