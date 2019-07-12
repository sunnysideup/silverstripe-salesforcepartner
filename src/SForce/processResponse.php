<?php

namespace SForce\Wsdl;

class processResponse
{

    /**
     * @var ProcessResult $result
     */
    protected $result = null;

    /**
     * @param ProcessResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return ProcessResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ProcessResult $result
     * @return \SForce\Wsdl\processResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
