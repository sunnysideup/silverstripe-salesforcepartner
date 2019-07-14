<?php

namespace SForce\Wsdl;

class upsertResponse
{
    /**
     * @var UpsertResult
     */
    protected $result = null;

    /**
     * @param UpsertResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return UpsertResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param UpsertResult $result
     * @return \SForce\Wsdl\upsertResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
