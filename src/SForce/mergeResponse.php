<?php

namespace SForce\Wsdl;

class mergeResponse
{

    /**
     * @var MergeResult $result
     */
    protected $result = null;

    /**
     * @param MergeResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return MergeResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param MergeResult $result
     * @return \SForce\Wsdl\mergeResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
