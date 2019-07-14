<?php

namespace SForce\Wsdl;

class describeSearchableEntities
{
    /**
     * @var boolean
     */
    protected $includeOnlyEntitiesWithTabs = null;

    /**
     * @param boolean $includeOnlyEntitiesWithTabs
     */
    public function __construct($includeOnlyEntitiesWithTabs = null)
    {
        $this->includeOnlyEntitiesWithTabs = $includeOnlyEntitiesWithTabs;
    }

    /**
     * @return boolean
     */
    public function getIncludeOnlyEntitiesWithTabs()
    {
        return $this->includeOnlyEntitiesWithTabs;
    }

    /**
     * @param boolean $includeOnlyEntitiesWithTabs
     * @return \SForce\Wsdl\describeSearchableEntities
     */
    public function setIncludeOnlyEntitiesWithTabs($includeOnlyEntitiesWithTabs)
    {
        $this->includeOnlyEntitiesWithTabs = $includeOnlyEntitiesWithTabs;
        return $this;
    }
}
