<?php

namespace SForce\Wsdl;

class NameValuePair
{
    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
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
     * @return \SForce\Wsdl\NameValuePair
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
     * @return \SForce\Wsdl\NameValuePair
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
