<?php

namespace SForce\Wsdl;

class describeSearchScopeOrder
{

    /**
     * @var boolean $includeRealTimeEntities
     */
    protected $includeRealTimeEntities = null;

    /**
     * @param boolean $includeRealTimeEntities
     */
    public function __construct($includeRealTimeEntities = null)
    {
      $this->includeRealTimeEntities = $includeRealTimeEntities;
    }

    /**
     * @return boolean
     */
    public function getIncludeRealTimeEntities()
    {
      return $this->includeRealTimeEntities;
    }

    /**
     * @param boolean $includeRealTimeEntities
     * @return \SForce\Wsdl\describeSearchScopeOrder
     */
    public function setIncludeRealTimeEntities($includeRealTimeEntities)
    {
      $this->includeRealTimeEntities = $includeRealTimeEntities;
      return $this;
    }

}
