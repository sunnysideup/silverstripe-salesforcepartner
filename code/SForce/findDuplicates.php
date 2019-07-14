<?php

namespace SForce\Wsdl;

class findDuplicates
{
    /**
     * @var sObject
     */
    protected $sObjects = null;

    /**
     * @param sObject $sObjects
     */
    public function __construct($sObjects = null)
    {
        $this->sObjects = $sObjects;
    }

    /**
     * @return sObject
     */
    public function getSObjects()
    {
        return $this->sObjects;
    }

    /**
     * @param sObject $sObjects
     * @return \SForce\Wsdl\findDuplicates
     */
    public function setSObjects($sObjects)
    {
        $this->sObjects = $sObjects;
        return $this;
    }
}
