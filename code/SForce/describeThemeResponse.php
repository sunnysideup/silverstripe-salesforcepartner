<?php

namespace SForce\Wsdl;

class describeThemeResponse
{

    /**
     * @var DescribeThemeResult $result
     */
    protected $result = null;

    /**
     * @param DescribeThemeResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeThemeResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeThemeResult $result
     * @return \SForce\Wsdl\describeThemeResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
