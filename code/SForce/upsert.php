<?php

namespace SForce\Wsdl;

class upsert
{

    /**
     * @var string $externalIDFieldName
     */
    protected $externalIDFieldName = null;

    /**
     * @var sObject $sObjects
     */
    protected $sObjects = null;

    /**
     * @param string $externalIDFieldName
     * @param sObject $sObjects
     */
    public function __construct($externalIDFieldName = null, $sObjects = null)
    {
      $this->externalIDFieldName = $externalIDFieldName;
      $this->sObjects = $sObjects;
    }

    /**
     * @return string
     */
    public function getExternalIDFieldName()
    {
      return $this->externalIDFieldName;
    }

    /**
     * @param string $externalIDFieldName
     * @return \SForce\Wsdl\upsert
     */
    public function setExternalIDFieldName($externalIDFieldName)
    {
      $this->externalIDFieldName = $externalIDFieldName;
      return $this;
    }

    /**
     * @return sObject
     */
    public function getSObjects()
    {
      return $this->sObjects;
    }

    /**
     * @param sObject $sObjects
     * @return \SForce\Wsdl\upsert
     */
    public function setSObjects($sObjects)
    {
      $this->sObjects = $sObjects;
      return $this;
    }

}
