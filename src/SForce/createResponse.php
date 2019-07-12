<?php

namespace SForce\Wsdl;

class createResponse
{
    /**
     * @var SaveResult
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
     * @return \SForce\Wsdl\createResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
