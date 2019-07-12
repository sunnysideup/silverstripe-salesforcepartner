<?php

namespace SForce\Wsdl;

class RecordTypeCompactLayoutMapping
{

    /**
     * @var boolean $available
     */
    protected $available = null;

    /**
     * @var ID $compactLayoutId
     */
    protected $compactLayoutId = null;

    /**
     * @var string $compactLayoutName
     */
    protected $compactLayoutName = null;

    /**
     * @var ID $recordTypeId
     */
    protected $recordTypeId = null;

    /**
     * @var string $recordTypeName
     */
    protected $recordTypeName = null;

    /**
     * @param boolean $available
     * @param string $compactLayoutName
     * @param ID $recordTypeId
     * @param string $recordTypeName
     */
    public function __construct($available = null, $compactLayoutName = null, $recordTypeId = null, $recordTypeName = null)
    {
      $this->available = $available;
      $this->compactLayoutName = $compactLayoutName;
      $this->recordTypeId = $recordTypeId;
      $this->recordTypeName = $recordTypeName;
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
     * @return \SForce\Wsdl\RecordTypeCompactLayoutMapping
     */
    public function setAvailable($available)
    {
      $this->available = $available;
      return $this;
    }

    /**
     * @return ID
     */
    public function getCompactLayoutId()
    {
      return $this->compactLayoutId;
    }

    /**
     * @param ID $compactLayoutId
     * @return \SForce\Wsdl\RecordTypeCompactLayoutMapping
     */
    public function setCompactLayoutId($compactLayoutId)
    {
      $this->compactLayoutId = $compactLayoutId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompactLayoutName()
    {
      return $this->compactLayoutName;
    }

    /**
     * @param string $compactLayoutName
     * @return \SForce\Wsdl\RecordTypeCompactLayoutMapping
     */
    public function setCompactLayoutName($compactLayoutName)
    {
      $this->compactLayoutName = $compactLayoutName;
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
     * @return \SForce\Wsdl\RecordTypeCompactLayoutMapping
     */
    public function setRecordTypeId($recordTypeId)
    {
      $this->recordTypeId = $recordTypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordTypeName()
    {
      return $this->recordTypeName;
    }

    /**
     * @param string $recordTypeName
     * @return \SForce\Wsdl\RecordTypeCompactLayoutMapping
     */
    public function setRecordTypeName($recordTypeName)
    {
      $this->recordTypeName = $recordTypeName;
      return $this;
    }

}
