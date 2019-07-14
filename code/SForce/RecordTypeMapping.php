<?php

namespace SForce\Wsdl;

class RecordTypeMapping
{
    /**
     * @var boolean
     */
    protected $active = null;

    /**
     * @var boolean
     */
    protected $available = null;

    /**
     * @var boolean
     */
    protected $defaultRecordTypeMapping = null;

    /**
     * @var string
     */
    protected $developerName = null;

    /**
     * @var ID
     */
    protected $layoutId = null;

    /**
     * @var boolean
     */
    protected $master = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var PicklistForRecordType[]
     */
    protected $picklistsForRecordType = null;

    /**
     * @var ID
     */
    protected $recordTypeId = null;

    /**
     * @param boolean $active
     * @param boolean $available
     * @param boolean $defaultRecordTypeMapping
     * @param string $developerName
     * @param ID $layoutId
     * @param boolean $master
     * @param string $name
     */
    public function __construct($active = null, $available = null, $defaultRecordTypeMapping = null, $developerName = null, $layoutId = null, $master = null, $name = null)
    {
        $this->active = $active;
        $this->available = $available;
        $this->defaultRecordTypeMapping = $defaultRecordTypeMapping;
        $this->developerName = $developerName;
        $this->layoutId = $layoutId;
        $this->master = $master;
        $this->name = $name;
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
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param boolean $available
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultRecordTypeMapping()
    {
        return $this->defaultRecordTypeMapping;
    }

    /**
     * @param boolean $defaultRecordTypeMapping
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setDefaultRecordTypeMapping($defaultRecordTypeMapping)
    {
        $this->defaultRecordTypeMapping = $defaultRecordTypeMapping;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * @param string $developerName
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
        return $this;
    }

    /**
     * @return ID
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * @param ID $layoutId
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * @param boolean $master
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setMaster($master)
    {
        $this->master = $master;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \SForce\Wsdl\RecordTypeMapping
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
     * @return \SForce\Wsdl\RecordTypeMapping
     */
    public function setRecordTypeId($recordTypeId)
    {
        $this->recordTypeId = $recordTypeId;
        return $this;
    }
}
