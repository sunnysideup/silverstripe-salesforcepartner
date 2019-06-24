<?php

namespace SForce\Wsdl;

class NameObjectValuePair
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var anyType[] $value
     */
    protected $value = null;

    /**
     * @param string $name
     * @param anyType[] $value
     */
    public function __construct($name = null, array $value = null)
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
     * @return \SForce\Wsdl\NameObjectValuePair
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return anyType[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param anyType[] $value
     * @return \SForce\Wsdl\NameObjectValuePair
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
