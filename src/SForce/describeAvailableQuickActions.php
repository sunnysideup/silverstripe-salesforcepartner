<?php

namespace SForce\Wsdl;

class describeAvailableQuickActions
{
    /**
     * @var string
     */
    protected $contextType = null;

    /**
     * @param string $contextType
     */
    public function __construct($contextType = null)
    {
        $this->contextType = $contextType;
    }

    /**
     * @return string
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * @param string $contextType
     * @return \SForce\Wsdl\describeAvailableQuickActions
     */
    public function setContextType($contextType)
    {
        $this->contextType = $contextType;
        return $this;
    }
}
