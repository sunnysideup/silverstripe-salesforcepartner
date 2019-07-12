<?php

namespace SForce\Wsdl;

class emptyRecycleBinResponse
{
    /**
     * @var EmptyRecycleBinResult
     */
    protected $result = null;

    /**
     * @param EmptyRecycleBinResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return EmptyRecycleBinResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param EmptyRecycleBinResult $result
     * @return \SForce\Wsdl\emptyRecycleBinResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
