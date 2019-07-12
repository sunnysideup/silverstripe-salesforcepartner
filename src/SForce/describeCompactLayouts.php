<?php

namespace SForce\Wsdl;

class describeCompactLayouts
{
    /**
     * @var string
     */
    protected $sObjectType = null;

    /**
     * @var ID
     */
    protected $recordTypeIds = null;

    /**
     * @param string $sObjectType
     * @param ID $recordTypeIds
     */
    public function __construct($sObjectType = null, $recordTypeIds = null)
    {
        $this->sObjectType = $sObjectType;
        $this->recordTypeIds = $recordTypeIds;
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
     * @return \SForce\Wsdl\describeCompactLayouts
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }

    /**
     * @return ID
     */
    public function getRecordTypeIds()
    {
        return $this->recordTypeIds;
    }

    /**
     * @param ID $recordTypeIds
     * @return \SForce\Wsdl\describeCompactLayouts
     */
    public function setRecordTypeIds($recordTypeIds)
    {
        $this->recordTypeIds = $recordTypeIds;
        return $this;
    }
}
