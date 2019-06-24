<?php

namespace SForce\Wsdl;

class describeAvailableQuickActionsResponse
{

    /**
     * @var DescribeAvailableQuickActionResult $result
     */
    protected $result = null;

    /**
     * @param DescribeAvailableQuickActionResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeAvailableQuickActionResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeAvailableQuickActionResult $result
     * @return \SForce\Wsdl\describeAvailableQuickActionsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
