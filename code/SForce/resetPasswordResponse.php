<?php

namespace SForce\Wsdl;

class resetPasswordResponse
{

    /**
     * @var ResetPasswordResult $result
     */
    protected $result = null;

    /**
     * @param ResetPasswordResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return ResetPasswordResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ResetPasswordResult $result
     * @return \SForce\Wsdl\resetPasswordResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
