<?php

namespace SForce\Wsdl;

class describeApprovalLayoutDouble
{
    /**
     * @var string
     */
    protected $sObjectType = null;

    /**
     * @var string
     */
    protected $approvalProcessNames = null;

    /**
     * @param string $sObjectType
     * @param string $approvalProcessNames
     */
    public function __construct($sObjectType = null, $approvalProcessNames = null)
    {
        $this->sObjectType = $sObjectType;
        $this->approvalProcessNames = $approvalProcessNames;
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
     * @return \SForce\Wsdl\describeApprovalLayoutDouble
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getApprovalProcessNames()
    {
        return $this->approvalProcessNames;
    }

    /**
     * @param string $approvalProcessNames
     * @return \SForce\Wsdl\describeApprovalLayoutDouble
     */
    public function setApprovalProcessNames($approvalProcessNames)
    {
        $this->approvalProcessNames = $approvalProcessNames;
        return $this;
    }
}
