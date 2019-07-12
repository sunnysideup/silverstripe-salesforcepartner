<?php

namespace SForce\Wsdl;

class PicklistEntry
{
    /**
     * @var boolean
     */
    protected $active = null;

    /**
     * @var boolean
     */
    protected $defaultValue = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var base64Binary
     */
    protected $validFor = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @param boolean $active
     * @param boolean $defaultValue
     * @param string $value
     */
    public function __construct($active = null, $defaultValue = null, $value = null)
    {
        $this->active = $active;
        $this->defaultValue = $defaultValue;
        $this->value = $value;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @return \SForce\Wsdl\PicklistEntry
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param boolean $defaultValue
     * @return \SForce\Wsdl\PicklistEntry
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
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
     * @return \SForce\Wsdl\PicklistEntry
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getValidFor()
    {
        return $this->validFor;
    }

    /**
     * @param base64Binary $validFor
     * @return \SForce\Wsdl\PicklistEntry
     */
    public function setValidFor($validFor)
    {
        $this->validFor = $validFor;
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
     * @return \SForce\Wsdl\PicklistEntry
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
