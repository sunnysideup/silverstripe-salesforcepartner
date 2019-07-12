<?php

namespace SForce\Wsdl;

class getServerTimestampResponse
{

    /**
     * @var GetServerTimestampResult $result
     */
    protected $result = null;

    /**
     * @param GetServerTimestampResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return GetServerTimestampResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetServerTimestampResult $result
     * @return \SForce\Wsdl\getServerTimestampResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
