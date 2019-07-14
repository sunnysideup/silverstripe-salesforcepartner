<?php

namespace SForce\Wsdl;

class NamedLayoutInfo
{
    /**
     * @var string
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this->name = $name;
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
     * @return \SForce\Wsdl\NamedLayoutInfo
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
