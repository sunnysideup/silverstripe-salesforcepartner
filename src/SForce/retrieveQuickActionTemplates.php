<?php

namespace SForce\Wsdl;

class retrieveQuickActionTemplates
{

    /**
     * @var string $quickActionNames
     */
    protected $quickActionNames = null;

    /**
     * @var ID $contextId
     */
    protected $contextId = null;

    /**
     * @param string $quickActionNames
     * @param ID $contextId
     */
    public function __construct($quickActionNames = null, $contextId = null)
    {
      $this->quickActionNames = $quickActionNames;
      $this->contextId = $contextId;
    }

    /**
     * @return string
     */
    public function getQuickActionNames()
    {
      return $this->quickActionNames;
    }

    /**
     * @param string $quickActionNames
     * @return \SForce\Wsdl\retrieveQuickActionTemplates
     */
    public function setQuickActionNames($quickActionNames)
    {
      $this->quickActionNames = $quickActionNames;
      return $this;
    }

    /**
     * @return ID
     */
    public function getContextId()
    {
      return $this->contextId;
    }

    /**
     * @param ID $contextId
     * @return \SForce\Wsdl\retrieveQuickActionTemplates
     */
    public function setContextId($contextId)
    {
      $this->contextId = $contextId;
      return $this;
    }

}
