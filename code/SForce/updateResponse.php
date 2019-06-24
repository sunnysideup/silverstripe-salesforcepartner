<?php

namespace SForce\Wsdl;

class updateResponse
{

    /**
     * @var SaveResult $result
     */
    protected $result = null;

    /**
     * @param SaveResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return SaveResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param SaveResult $result
     * @return \SForce\Wsdl\updateResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
