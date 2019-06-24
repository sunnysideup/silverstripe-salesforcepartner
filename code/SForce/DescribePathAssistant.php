<?php

namespace SForce\Wsdl;

class DescribePathAssistant
{

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @var string $apiName
     */
    protected $apiName = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $pathPicklistField
     */
    protected $pathPicklistField = null;

    /**
     * @var PicklistForRecordType[] $picklistsForRecordType
     */
    protected $picklistsForRecordType = null;

    /**
     * @var ID $recordTypeId
     */
    protected $recordTypeId = null;

    /**
     * @var DescribePathAssistantStep[] $steps
     */
    protected $steps = null;

    /**
     * @param boolean $active
     * @param string $apiName
     * @param string $label
     * @param string $pathPicklistField
     */
    public function __construct($active = null, $apiName = null, $label = null, $pathPicklistField = null)
    {
      $this->active = $active;
      $this->apiName = $apiName;
      $this->label = $label;
      $this->pathPicklistField = $pathPicklistField;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param boolean $active
     * @return \SForce\Wsdl\DescribePathAssistant
     */
    public function setActive($active)
    {
      $this->active = $active;
      return $this;
    }

    /**
     * @return string
     */
    public function getApiName()
    {
      return $this->apiName;
    }

    /**
     * @param string $apiName
     * @return \SForce\Wsdl\DescribePathAssistant
     */
    public function setApiName($apiName)
    {
      $this->apiName = $apiName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \SForce\Wsdl\DescribePathAssistant
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getPathPicklistField()
    {
      return $this->pathPicklistField;
    }

    /**
     * @param string $pathPicklistField
     * @return \SForce\Wsdl\DescribePathAssistant
     */
    public function setPathPicklistField($pathPicklistField)
    {
      $this->pathPicklistField = $pathPicklistField;
      return $this;
    }

    /**
     * @return PicklistForRecordType[]
     */
    public function getPicklistsForRecordType()
    {
      return $this->picklistsForRecordType;
    }

    /**
     * @param PicklistForRecordType[] $picklistsForRecordType
     * @return \SForce\Wsdl\DescribePathAssistant
     */
    public function setPicklistsForRecordType(array $picklistsForRecordType = null)
    {
      $this->picklistsForRecordType = $picklistsForRecordType;
      return $this;
    }

    /**
     * @return ID
     */
    public function getRecordTypeId()
    {
      return $this->recordTypeId;
    }

    /**
     * @param ID $recordTypeId
     * @return \SForce\Wsdl\DescribePathAssistant
     */
    public function setRecordTypeId($recordTypeId)
    {
      $this->recordTypeId = $recordTypeId;
      return $this;
    }

    /**
     * @return DescribePathAssistantStep[]
     */
    public function getSteps()
    {
      return $this->steps;
    }

    /**
     * @param DescribePathAssistantStep[] $steps
     * @return \SForce\Wsdl\DescribePathAssistant
     */
    public function setSteps(array $steps = null)
    {
      $this->steps = $steps;
      return $this;
    }

}
