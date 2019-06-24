<?php

namespace SForce\Wsdl;

class performQuickActionsResponse
{

    /**
     * @var PerformQuickActionResult $result
     */
    protected $result = null;

    /**
     * @param PerformQuickActionResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return PerformQuickActionResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param PerformQuickActionResult $result
     * @return \SForce\Wsdl\performQuickActionsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
