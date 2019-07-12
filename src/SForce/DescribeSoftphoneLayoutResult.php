<?php

namespace SForce\Wsdl;

class DescribeSoftphoneLayoutResult
{

    /**
     * @var DescribeSoftphoneLayoutCallType[] $callTypes
     */
    protected $callTypes = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param DescribeSoftphoneLayoutCallType[] $callTypes
     * @param ID $id
     * @param string $name
     */
    public function __construct(array $callTypes = null, $id = null, $name = null)
    {
      $this->callTypes = $callTypes;
      $this->id = $id;
      $this->name = $name;
    }

    /**
     * @return DescribeSoftphoneLayoutCallType[]
     */
    public function getCallTypes()
    {
      return $this->callTypes;
    }

    /**
     * @param DescribeSoftphoneLayoutCallType[] $callTypes
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutResult
     */
    public function setCallTypes(array $callTypes)
    {
      $this->callTypes = $callTypes;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutResult
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutResult
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
