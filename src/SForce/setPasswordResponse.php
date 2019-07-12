<?php

namespace SForce\Wsdl;

class setPasswordResponse
{
    /**
     * @var SetPasswordResult
     */
    protected $result = null;

    /**
     * @param SetPasswordResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return SetPasswordResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param SetPasswordResult $result
     * @return \SForce\Wsdl\setPasswordResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
