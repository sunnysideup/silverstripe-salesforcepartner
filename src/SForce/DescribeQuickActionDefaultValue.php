<?php

namespace SForce\Wsdl;

class DescribeQuickActionDefaultValue
{
    /**
     * @var string
     */
    protected $defaultValue = null;

    /**
     * @var string
     */
    protected $field = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     * @return \SForce\Wsdl\DescribeQuickActionDefaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return \SForce\Wsdl\DescribeQuickActionDefaultValue
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }
}
