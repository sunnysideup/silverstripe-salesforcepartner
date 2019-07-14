<?php

namespace SForce\Wsdl;

class performQuickActions
{
    /**
     * @var PerformQuickActionRequest
     */
    protected $quickActions = null;

    /**
     * @param PerformQuickActionRequest $quickActions
     */
    public function __construct($quickActions = null)
    {
        $this->quickActions = $quickActions;
    }

    /**
     * @return PerformQuickActionRequest
     */
    public function getQuickActions()
    {
        return $this->quickActions;
    }

    /**
     * @param PerformQuickActionRequest $quickActions
     * @return \SForce\Wsdl\performQuickActions
     */
    public function setQuickActions($quickActions)
    {
        $this->quickActions = $quickActions;
        return $this;
    }
}
