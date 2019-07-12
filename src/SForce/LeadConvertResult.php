<?php

namespace SForce\Wsdl;

class LeadConvertResult
{
    /**
     * @var ID
     */
    protected $accountId = null;

    /**
     * @var ID
     */
    protected $contactId = null;

    /**
     * @var Error[]
     */
    protected $errors = null;

    /**
     * @var ID
     */
    protected $leadId = null;

    /**
     * @var ID
     */
    protected $opportunityId = null;

    /**
     * @var boolean
     */
    protected $success = null;

    /**
     * @param boolean $success
     */
    public function __construct($success = null)
    {
        $this->success = $success;
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
     * @return \SForce\Wsdl\LeadConvertResult
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
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
     * @return \SForce\Wsdl\LeadConvertResult
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \SForce\Wsdl\LeadConvertResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
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
     * @return \SForce\Wsdl\LeadConvertResult
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
     * @return \SForce\Wsdl\LeadConvertResult
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     * @return \SForce\Wsdl\LeadConvertResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }
}
