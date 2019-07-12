<?php

namespace SForce\Wsdl;

class describePrimaryCompactLayouts
{
    /**
     * @var string
     */
    protected $sObjectTypes = null;

    /**
     * @param string $sObjectTypes
     */
    public function __construct($sObjectTypes = null)
    {
        $this->sObjectTypes = $sObjectTypes;
    }

    /**
     * @return string
     */
    public function getSObjectTypes()
    {
        return $this->sObjectTypes;
    }

    /**
     * @param string $sObjectTypes
     * @return \SForce\Wsdl\describePrimaryCompactLayouts
     */
    public function setSObjectTypes($sObjectTypes)
    {
        $this->sObjectTypes = $sObjectTypes;
        return $this;
    }
}
