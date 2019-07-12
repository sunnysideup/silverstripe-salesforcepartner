<?php

namespace SForce\Wsdl;

class DuplicateRuleHeader
{
    /**
     * @var boolean
     */
    protected $allowSave = null;

    /**
     * @var boolean
     */
    protected $includeRecordDetails = null;

    /**
     * @var boolean
     */
    protected $runAsCurrentUser = null;

    /**
     * @param boolean $allowSave
     * @param boolean $includeRecordDetails
     * @param boolean $runAsCurrentUser
     */
    public function __construct($allowSave = null, $includeRecordDetails = null, $runAsCurrentUser = null)
    {
        $this->allowSave = $allowSave;
        $this->includeRecordDetails = $includeRecordDetails;
        $this->runAsCurrentUser = $runAsCurrentUser;
    }

    /**
     * @return boolean
     */
    public function getAllowSave()
    {
        return $this->allowSave;
    }

    /**
     * @param boolean $allowSave
     * @return \SForce\Wsdl\DuplicateRuleHeader
     */
    public function setAllowSave($allowSave)
    {
        $this->allowSave = $allowSave;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeRecordDetails()
    {
        return $this->includeRecordDetails;
    }

    /**
     * @param boolean $includeRecordDetails
     * @return \SForce\Wsdl\DuplicateRuleHeader
     */
    public function setIncludeRecordDetails($includeRecordDetails)
    {
        $this->includeRecordDetails = $includeRecordDetails;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRunAsCurrentUser()
    {
        return $this->runAsCurrentUser;
    }

    /**
     * @param boolean $runAsCurrentUser
     * @return \SForce\Wsdl\DuplicateRuleHeader
     */
    public function setRunAsCurrentUser($runAsCurrentUser)
    {
        $this->runAsCurrentUser = $runAsCurrentUser;
        return $this;
    }
}
