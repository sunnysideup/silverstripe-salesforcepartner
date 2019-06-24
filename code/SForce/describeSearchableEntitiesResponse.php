<?php

namespace SForce\Wsdl;

class describeSearchableEntitiesResponse
{

    /**
     * @var DescribeSearchableEntityResult $result
     */
    protected $result = null;

    /**
     * @param DescribeSearchableEntityResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeSearchableEntityResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeSearchableEntityResult $result
     * @return \SForce\Wsdl\describeSearchableEntitiesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
