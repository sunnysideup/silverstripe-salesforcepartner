<?php

namespace SForce\Wsdl;

class describeSearchScopeOrderResponse
{

    /**
     * @var DescribeSearchScopeOrderResult $result
     */
    protected $result = null;

    /**
     * @param DescribeSearchScopeOrderResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeSearchScopeOrderResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeSearchScopeOrderResult $result
     * @return \SForce\Wsdl\describeSearchScopeOrderResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
