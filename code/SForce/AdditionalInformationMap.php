<?php

namespace SForce\Wsdl;

class AdditionalInformationMap
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $name
     * @param string $value
     */
    public function __construct($name = null, $value = null)
    {
      $this->name = $name;
      $this->value = $value;
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
     * @return \SForce\Wsdl\AdditionalInformationMap
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \SForce\Wsdl\AdditionalInformationMap
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
