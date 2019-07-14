<?php

namespace SForce\Wsdl;

class describeSObjectsResponse
{
    /**
     * @var DescribeSObjectResult
     */
    protected $result = null;

    /**
     * @param DescribeSObjectResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeSObjectResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeSObjectResult $result
     * @return \SForce\Wsdl\describeSObjectsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
