<?php

namespace SForce\Wsdl;

class sendEmailResponse
{
    /**
     * @var SendEmailResult
     */
    protected $result = null;

    /**
     * @param SendEmailResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return SendEmailResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param SendEmailResult $result
     * @return \SForce\Wsdl\sendEmailResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
