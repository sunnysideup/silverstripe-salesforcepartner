<?php

namespace SForce\Wsdl;

class retrieve
{

    /**
     * @var string $fieldList
     */
    protected $fieldList = null;

    /**
     * @var string $sObjectType
     */
    protected $sObjectType = null;

    /**
     * @var ID $ids
     */
    protected $ids = null;

    /**
     * @param string $fieldList
     * @param string $sObjectType
     * @param ID $ids
     */
    public function __construct($fieldList = null, $sObjectType = null, $ids = null)
    {
      $this->fieldList = $fieldList;
      $this->sObjectType = $sObjectType;
      $this->ids = $ids;
    }

    /**
     * @return string
     */
    public function getFieldList()
    {
      return $this->fieldList;
    }

    /**
     * @param string $fieldList
     * @return \SForce\Wsdl\retrieve
     */
    public function setFieldList($fieldList)
    {
      $this->fieldList = $fieldList;
      return $this;
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
     * @return \SForce\Wsdl\retrieve
     */
    public function setSObjectType($sObjectType)
    {
      $this->sObjectType = $sObjectType;
      return $this;
    }

    /**
     * @return ID
     */
    public function getIds()
    {
      return $this->ids;
    }

    /**
     * @param ID $ids
     * @return \SForce\Wsdl\retrieve
     */
    public function setIds($ids)
    {
      $this->ids = $ids;
      return $this;
    }

}
