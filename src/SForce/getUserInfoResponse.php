<?php

namespace SForce\Wsdl;

class getUserInfoResponse
{

    /**
     * @var GetUserInfoResult $result
     */
    protected $result = null;

    /**
     * @param GetUserInfoResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return GetUserInfoResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetUserInfoResult $result
     * @return \SForce\Wsdl\getUserInfoResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
