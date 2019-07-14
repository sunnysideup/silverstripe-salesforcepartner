<?php

namespace SForce\Wsdl;

class DisableFeedTrackingHeader
{
    /**
     * @var boolean
     */
    protected $disableFeedTracking = null;

    /**
     * @param boolean $disableFeedTracking
     */
    public function __construct($disableFeedTracking = null)
    {
        $this->disableFeedTracking = $disableFeedTracking;
    }

    /**
     * @return boolean
     */
    public function getDisableFeedTracking()
    {
        return $this->disableFeedTracking;
    }

    /**
     * @param boolean $disableFeedTracking
     * @return \SForce\Wsdl\DisableFeedTrackingHeader
     */
    public function setDisableFeedTracking($disableFeedTracking)
    {
        $this->disableFeedTracking = $disableFeedTracking;
        return $this;
    }
}
