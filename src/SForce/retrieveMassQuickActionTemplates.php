<?php

namespace SForce\Wsdl;

class retrieveMassQuickActionTemplates
{
    /**
     * @var string
     */
    protected $quickActionName = null;

    /**
     * @var ID
     */
    protected $contextIds = null;

    /**
     * @param string $quickActionName
     * @param ID $contextIds
     */
    public function __construct($quickActionName = null, $contextIds = null)
    {
        $this->quickActionName = $quickActionName;
        $this->contextIds = $contextIds;
    }

    /**
     * @return string
     */
    public function getQuickActionName()
    {
        return $this->quickActionName;
    }

    /**
     * @param string $quickActionName
     * @return \SForce\Wsdl\retrieveMassQuickActionTemplates
     */
    public function setQuickActionName($quickActionName)
    {
        $this->quickActionName = $quickActionName;
        return $this;
    }

    /**
     * @return ID
     */
    public function getContextIds()
    {
        return $this->contextIds;
    }

    /**
     * @param ID $contextIds
     * @return \SForce\Wsdl\retrieveMassQuickActionTemplates
     */
    public function setContextIds($contextIds)
    {
        $this->contextIds = $contextIds;
        return $this;
    }
}
