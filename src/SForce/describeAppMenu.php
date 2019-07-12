<?php

namespace SForce\Wsdl;

class describeAppMenu
{

    /**
     * @var AppMenuType $appMenuType
     */
    protected $appMenuType = null;

    /**
     * @var ID $networkId
     */
    protected $networkId = null;

    /**
     * @param AppMenuType $appMenuType
     * @param ID $networkId
     */
    public function __construct($appMenuType = null, $networkId = null)
    {
      $this->appMenuType = $appMenuType;
      $this->networkId = $networkId;
    }

    /**
     * @return AppMenuType
     */
    public function getAppMenuType()
    {
      return $this->appMenuType;
    }

    /**
     * @param AppMenuType $appMenuType
     * @return \SForce\Wsdl\describeAppMenu
     */
    public function setAppMenuType($appMenuType)
    {
      $this->appMenuType = $appMenuType;
      return $this;
    }

    /**
     * @return ID
     */
    public function getNetworkId()
    {
      return $this->networkId;
    }

    /**
     * @param ID $networkId
     * @return \SForce\Wsdl\describeAppMenu
     */
    public function setNetworkId($networkId)
    {
      $this->networkId = $networkId;
      return $this;
    }

}
