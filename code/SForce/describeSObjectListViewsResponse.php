<?php

namespace SForce\Wsdl;

class describeSObjectListViewsResponse
{

    /**
     * @var DescribeSoqlListViewResult $result
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
     * @return \SForce\Wsdl\describeSObjectListViewsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
