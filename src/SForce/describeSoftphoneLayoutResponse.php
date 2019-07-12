<?php

namespace SForce\Wsdl;

class describeSoftphoneLayoutResponse
{
    /**
     * @var DescribeSoftphoneLayoutResult
     */
    protected $result = null;

    /**
     * @param DescribeSoftphoneLayoutResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeSoftphoneLayoutResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeSoftphoneLayoutResult $result
     * @return \SForce\Wsdl\describeSoftphoneLayoutResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
