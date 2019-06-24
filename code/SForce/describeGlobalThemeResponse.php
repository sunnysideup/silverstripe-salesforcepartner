<?php

namespace SForce\Wsdl;

class describeGlobalThemeResponse
{

    /**
     * @var DescribeGlobalTheme $result
     */
    protected $result = null;

    /**
     * @param DescribeGlobalTheme $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return DescribeGlobalTheme
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param DescribeGlobalTheme $result
     * @return \SForce\Wsdl\describeGlobalThemeResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
