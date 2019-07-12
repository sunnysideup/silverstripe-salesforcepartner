<?php

namespace SForce\Wsdl;

class describeSoqlListViewsResponse
{
    /**
     * @var DescribeSoqlListViewResult
     */
    protected $result = null;

    /**
     * @param DescribeSoqlListViewResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return DescribeSoqlListViewResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param DescribeSoqlListViewResult $result
     * @return \SForce\Wsdl\describeSoqlListViewsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
