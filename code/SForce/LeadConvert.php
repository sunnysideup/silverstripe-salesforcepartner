<?php

namespace SForce\Wsdl;

class LeadConvert
{
    /**
     * @var ID
     */
    protected $accountId = null;

    /**
     * @var sObject
     */
    protected $accountRecord = null;

    /**
     * @var boolean
     */
    protected $bypassAccountDedupeCheck = null;

    /**
     * @var boolean
     */
    protected $bypassContactDedupeCheck = null;

    /**
     * @var ID
     */
    protected $contactId = null;

    /**
     * @var sObject
     */
    protected $contactRecord = null;

    /**
     * @var string
     */
    protected $convertedStatus = null;

    /**
     * @var boolean
     */
    protected $doNotCreateOpportunity = null;

    /**
     * @var ID
     */
    protected $leadId = null;

    /**
     * @var ID
     */
    protected $opportunityId = null;

    /**
     * @var string
     */
    protected $opportunityName = null;

    /**
     * @var sObject
     */
    protected $opportunityRecord = null;

    /**
     * @var boolean
     */
    protected $overwriteLeadSource = null;

    /**
     * @var ID
     */
    protected $ownerId = null;

    /**
     * @var boolean
     */
    protected $sendNotificationEmail = null;

    /**
     * @param string $convertedStatus
     * @param boolean $doNotCreateOpportunity
     * @param ID $leadId
     * @param boolean $overwriteLeadSource
     * @param boolean $sendNotificationEmail
     */
    public function __construct($convertedStatus = null, $doNotCreateOpportunity = null, $leadId = null, $overwriteLeadSource = null, $sendNotificationEmail = null)
    {
        $this->convertedStatus = $convertedStatus;
        $this->doNotCreateOpportunity = $doNotCreateOpportunity;
        $this->leadId = $leadId;
        $this->overwriteLeadSource = $overwriteLeadSource;
        $this->sendNotificationEmail = $sendNotificationEmail;
    }

    /**
     * @return ID
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param ID $accountId
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return sObject
     */
    public function getAccountRecord()
    {
        return $this->accountRecord;
    }

    /**
     * @param sObject $accountRecord
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setAccountRecord($accountRecord)
    {
        $this->accountRecord = $accountRecord;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBypassAccountDedupeCheck()
    {
        return $this->bypassAccountDedupeCheck;
    }

    /**
     * @param boolean $bypassAccountDedupeCheck
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setBypassAccountDedupeCheck($bypassAccountDedupeCheck)
    {
        $this->bypassAccountDedupeCheck = $bypassAccountDedupeCheck;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBypassContactDedupeCheck()
    {
        return $this->bypassContactDedupeCheck;
    }

    /**
     * @param boolean $bypassContactDedupeCheck
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setBypassContactDedupeCheck($bypassContactDedupeCheck)
    {
        $this->bypassContactDedupeCheck = $bypassContactDedupeCheck;
        return $this;
    }

    /**
     * @return ID
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param ID $contactId
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return sObject
     */
    public function getContactRecord()
    {
        return $this->contactRecord;
    }

    /**
     * @param sObject $contactRecord
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setContactRecord($contactRecord)
    {
        $this->contactRecord = $contactRecord;
        return $this;
    }

    /**
     * @return string
     */
    public function getConvertedStatus()
    {
        return $this->convertedStatus;
    }

    /**
     * @param string $convertedStatus
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setConvertedStatus($convertedStatus)
    {
        $this->convertedStatus = $convertedStatus;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDoNotCreateOpportunity()
    {
        return $this->doNotCreateOpportunity;
    }

    /**
     * @param boolean $doNotCreateOpportunity
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setDoNotCreateOpportunity($doNotCreateOpportunity)
    {
        $this->doNotCreateOpportunity = $doNotCreateOpportunity;
        return $this;
    }

    /**
     * @return ID
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * @param ID $leadId
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;
        return $this;
    }

    /**
     * @return ID
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * @param ID $opportunityId
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpportunityName()
    {
        return $this->opportunityName;
    }

    /**
     * @param string $opportunityName
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setOpportunityName($opportunityName)
    {
        $this->opportunityName = $opportunityName;
        return $this;
    }

    /**
     * @return sObject
     */
    public function getOpportunityRecord()
    {
        return $this->opportunityRecord;
    }

    /**
     * @param sObject $opportunityRecord
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setOpportunityRecord($opportunityRecord)
    {
        $this->opportunityRecord = $opportunityRecord;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOverwriteLeadSource()
    {
        return $this->overwriteLeadSource;
    }

    /**
     * @param boolean $overwriteLeadSource
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setOverwriteLeadSource($overwriteLeadSource)
    {
        $this->overwriteLeadSource = $overwriteLeadSource;
        return $this;
    }

    /**
     * @return ID
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param ID $ownerId
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSendNotificationEmail()
    {
        return $this->sendNotificationEmail;
    }

    /**
     * @param boolean $sendNotificationEmail
     * @return \SForce\Wsdl\LeadConvert
     */
    public function setSendNotificationEmail($sendNotificationEmail)
    {
        $this->sendNotificationEmail = $sendNotificationEmail;
        return $this;
    }
}
