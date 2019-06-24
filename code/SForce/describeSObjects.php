<?php

namespace SForce\Wsdl;

class describeSObjects
{

    /**
     * @var string $sObjectType
     */
    protected $sObjectType = null;

    /**
     * @param string $sObjectType
     */
    public function __construct($sObjectType = null)
    {
      $this->sObjectType = $sObjectType;
    }

    /**
     * @return string
     */
    public function getSObjectType()
    {
      return $this->sObjectType;
    }

    /**
     * @param string $sObjectType
     * @return \SForce\Wsdl\describeSObjects
     */
    public function setSObjectType($sObjectType)
    {
      $this->sObjectType = $sObjectType;
      return $this;
    }

}
