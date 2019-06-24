<?php

namespace SForce\Wsdl;

class retrieveResponse
{

    /**
     * @var sObject $result
     */
    protected $result = null;

    /**
     * @param sObject $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return sObject
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param sObject $result
     * @return \SForce\Wsdl\retrieveResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
