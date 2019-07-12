<?php

namespace SForce\Wsdl;

class describePathAssistants
{
    /**
     * @var string
     */
    protected $sObjectType = null;

    /**
     * @var string
     */
    protected $picklistValue = null;

    /**
     * @var ID
     */
    protected $recordTypeIds = null;

    /**
     * @param string $sObjectType
     * @param string $picklistValue
     * @param ID $recordTypeIds
     */
    public function __construct($sObjectType = null, $picklistValue = null, $recordTypeIds = null)
    {
        $this->sObjectType = $sObjectType;
        $this->picklistValue = $picklistValue;
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
     * @return \SForce\Wsdl\describePathAssistants
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPicklistValue()
    {
        return $this->picklistValue;
    }

    /**
     * @param string $picklistValue
     * @return \SForce\Wsdl\describePathAssistants
     */
    public function setPicklistValue($picklistValue)
    {
        $this->picklistValue = $picklistValue;
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
     * @return \SForce\Wsdl\describePathAssistants
     */
    public function setRecordTypeIds($recordTypeIds)
    {
        $this->recordTypeIds = $recordTypeIds;
        return $this;
    }
}
