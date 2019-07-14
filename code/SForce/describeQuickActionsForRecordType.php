<?php

namespace SForce\Wsdl;

class describeQuickActionsForRecordType
{
    /**
     * @var string
     */
    protected $quickActions = null;

    /**
     * @var string
     */
    protected $recordTypeId = null;

    /**
     * @param string $quickActions
     * @param string $recordTypeId
     */
    public function __construct($quickActions = null, $recordTypeId = null)
    {
        $this->quickActions = $quickActions;
        $this->recordTypeId = $recordTypeId;
    }

    /**
     * @return string
     */
    public function getQuickActions()
    {
        return $this->quickActions;
    }

    /**
     * @param string $quickActions
     * @return \SForce\Wsdl\describeQuickActionsForRecordType
     */
    public function setQuickActions($quickActions)
    {
        $this->quickActions = $quickActions;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordTypeId()
    {
        return $this->recordTypeId;
    }

    /**
     * @param string $recordTypeId
     * @return \SForce\Wsdl\describeQuickActionsForRecordType
     */
    public function setRecordTypeId($recordTypeId)
    {
        $this->recordTypeId = $recordTypeId;
        return $this;
    }
}
