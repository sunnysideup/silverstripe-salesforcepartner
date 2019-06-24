<?php

namespace SForce\Wsdl;

class changeOwnPasswordResponse
{

    /**
     * @var ChangeOwnPasswordResult $result
     */
    protected $result = null;

    /**
     * @param ChangeOwnPasswordResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return ChangeOwnPasswordResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ChangeOwnPasswordResult $result
     * @return \SForce\Wsdl\changeOwnPasswordResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
