<?php

namespace SForce\Wsdl;

class ScopeInfo
{
    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @param string $label
     * @param string $name
     */
    public function __construct($label = null, $name = null)
    {
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return \SForce\Wsdl\ScopeInfo
     */
    public function setLabel($label)
    {
        $this->label = $label;
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
     * @return \SForce\Wsdl\ScopeInfo
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
