<?php

namespace SForce\Wsdl;

class deleteResponse
{
    /**
     * @var DeleteResult
     */
    protected $result = null;

    /**
     * @param DeleteResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DeleteResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DeleteResult $result
     * @return \SForce\Wsdl\deleteResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
