<?php

namespace SForce\Wsdl;

class sObject
{


    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string[] $fieldsToNull
     */
    protected $fieldsToNull = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $type
     * @param string $any
     */
    public function __construct($type = null, $any = null)
    {
      $this->type = $type;
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \SForce\Wsdl\sObject
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getFieldsToNull()
    {
      return $this->fieldsToNull;
    }

    /**
     * @param string[] $fieldsToNull
     * @return \SForce\Wsdl\sObject
     */
    public function setFieldsToNull(array $fieldsToNull = null)
    {
      $this->fieldsToNull = $fieldsToNull;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param ID $Id
     * @return \SForce\Wsdl\sObject
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \SForce\Wsdl\sObject
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
