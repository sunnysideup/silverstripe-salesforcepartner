<?php

namespace SForce\Wsdl;

class convertLeadResponse
{
    /**
     * @var LeadConvertResult
     */
    protected $result = null;

    /**
     * @param LeadConvertResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return LeadConvertResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param LeadConvertResult $result
     * @return \SForce\Wsdl\convertLeadResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
