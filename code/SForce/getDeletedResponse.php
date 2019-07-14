<?php

namespace SForce\Wsdl;

class getDeletedResponse
{
    /**
     * @var GetDeletedResult
     */
    protected $result = null;

    /**
     * @param GetDeletedResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return GetDeletedResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param GetDeletedResult $result
     * @return \SForce\Wsdl\getDeletedResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
