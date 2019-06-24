<?php

namespace SForce\Wsdl;

class describeQuickActions
{

    /**
     * @var string $quickActions
     */
    protected $quickActions = null;

    /**
     * @param string $quickActions
     */
    public function __construct($quickActions = null)
    {
      $this->quickActions = $quickActions;
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
     * @return \SForce\Wsdl\describeQuickActions
     */
    public function setQuickActions($quickActions)
    {
      $this->quickActions = $quickActions;
      return $this;
    }

}
