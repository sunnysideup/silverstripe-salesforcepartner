<?php

namespace SForce\Wsdl;

class RecordTypeInfo
{

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @var boolean $available
     */
    protected $available = null;

    /**
     * @var boolean $defaultRecordTypeMapping
     */
    protected $defaultRecordTypeMapping = null;

    /**
     * @var string $developerName
     */
    protected $developerName = null;

    /**
     * @var boolean $master
     */
    protected $master = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ID $recordTypeId
     */
    protected $recordTypeId = null;

    /**
     * @param boolean $active
     * @param boolean $available
     * @param boolean $defaultRecordTypeMapping
     * @param string $developerName
     * @param boolean $master
     * @param string $name
     */
    public function __construct($active = null, $available = null, $defaultRecordTypeMapping = null, $developerName = null, $master = null, $name = null)
    {
      $this->active = $active;
      $this->available = $available;
      $this->defaultRecordTypeMapping = $defaultRecordTypeMapping;
      $this->developerName = $developerName;
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
     * @return \SForce\Wsdl\RecordTypeInfo
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
     * @return \SForce\Wsdl\RecordTypeInfo
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
     * @return \SForce\Wsdl\RecordTypeInfo
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
     * @return \SForce\Wsdl\RecordTypeInfo
     */
    public function setDeveloperName($developerName)
    {
      $this->developerName = $developerName;
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
     * @return \SForce\Wsdl\RecordTypeInfo
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
     * @return \SForce\Wsdl\RecordTypeInfo
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \SForce\Wsdl\RecordTypeInfo
     */
    public function setRecordTypeId($recordTypeId)
    {
      $this->recordTypeId = $recordTypeId;
      return $this;
    }

}
