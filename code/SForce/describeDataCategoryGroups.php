<?php

namespace SForce\Wsdl;

class describeDataCategoryGroups
{
    /**
     * @var string
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
     * @return \SForce\Wsdl\describeDataCategoryGroups
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }
}
