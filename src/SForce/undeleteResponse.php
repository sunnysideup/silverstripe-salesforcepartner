<?php

namespace SForce\Wsdl;

class undeleteResponse
{

    /**
     * @var UndeleteResult $result
     */
    protected $result = null;

    /**
     * @param UndeleteResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return UndeleteResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param UndeleteResult $result
     * @return \SForce\Wsdl\undeleteResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
