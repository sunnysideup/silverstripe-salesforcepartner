<?php

namespace SForce\Wsdl;

class convertLead
{
    /**
     * @var LeadConvert
     */
    protected $leadConverts = null;

    /**
     * @param LeadConvert $leadConverts
     */
    public function __construct($leadConverts = null)
    {
        $this->leadConverts = $leadConverts;
    }

    /**
     * @return LeadConvert
     */
    public function getLeadConverts()
    {
        return $this->leadConverts;
    }

    /**
     * @param LeadConvert $leadConverts
     * @return \SForce\Wsdl\convertLead
     */
    public function setLeadConverts($leadConverts)
    {
        $this->leadConverts = $leadConverts;
        return $this;
    }
}
