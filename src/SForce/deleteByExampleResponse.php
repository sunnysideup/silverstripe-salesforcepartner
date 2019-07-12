<?php

namespace SForce\Wsdl;

class deleteByExampleResponse
{

    /**
     * @var DeleteByExampleResult $result
     */
    protected $result = null;

    /**
     * @param DeleteByExampleResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DeleteByExampleResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DeleteByExampleResult $result
     * @return \SForce\Wsdl\deleteByExampleResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
