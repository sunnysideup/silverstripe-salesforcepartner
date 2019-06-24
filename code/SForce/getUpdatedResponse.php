<?php

namespace SForce\Wsdl;

class getUpdatedResponse
{

    /**
     * @var GetUpdatedResult $result
     */
    protected $result = null;

    /**
     * @param GetUpdatedResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return GetUpdatedResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetUpdatedResult $result
     * @return \SForce\Wsdl\getUpdatedResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
