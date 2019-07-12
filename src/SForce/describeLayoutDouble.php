<?php

namespace SForce\Wsdl;

class describeLayoutDouble
{

    /**
     * @var string $sObjectType
     */
    protected $sObjectType = null;

    /**
     * @var string $layoutName
     */
    protected $layoutName = null;

    /**
     * @var ID $recordTypeIds
     */
    protected $recordTypeIds = null;

    /**
     * @param string $sObjectType
     * @param string $layoutName
     * @param ID $recordTypeIds
     */
    public function __construct($sObjectType = null, $layoutName = null, $recordTypeIds = null)
    {
      $this->sObjectType = $sObjectType;
      $this->layoutName = $layoutName;
      $this->recordTypeIds = $recordTypeIds;
    }

    /**
     * @return string
     */
    public function getSObjectType()
    {
      return $this->sObjectType;
    }

    /**
     * @param string $sObjectType
     * @return \SForce\Wsdl\describeLayoutDouble
     */
    public function setSObjectType($sObjectType)
    {
      $this->sObjectType = $sObjectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLayoutName()
    {
      return $this->layoutName;
    }

    /**
     * @param string $layoutName
     * @return \SForce\Wsdl\describeLayoutDouble
     */
    public function setLayoutName($layoutName)
    {
      $this->layoutName = $layoutName;
      return $this;
    }

    /**
     * @return ID
     */
    public function getRecordTypeIds()
    {
      return $this->recordTypeIds;
    }

    /**
     * @param ID $recordTypeIds
     * @return \SForce\Wsdl\describeLayoutDouble
     */
    public function setRecordTypeIds($recordTypeIds)
    {
      $this->recordTypeIds = $recordTypeIds;
      return $this;
    }

}
