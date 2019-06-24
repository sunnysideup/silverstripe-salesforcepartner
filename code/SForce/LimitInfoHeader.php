<?php

namespace SForce\Wsdl;

class LimitInfoHeader
{

    /**
     * @var LimitInfo $limitInfo
     */
    protected $limitInfo = null;

    /**
     * @param LimitInfo $limitInfo
     */
    public function __construct($limitInfo = null)
    {
      $this->limitInfo = $limitInfo;
    }

    /**
     * @return LimitInfo
     */
    public function getLimitInfo()
    {
      return $this->limitInfo;
    }

    /**
     * @param LimitInfo $limitInfo
     * @return \SForce\Wsdl\LimitInfoHeader
     */
    public function setLimitInfo($limitInfo)
    {
      $this->limitInfo = $limitInfo;
      return $this;
    }

}
