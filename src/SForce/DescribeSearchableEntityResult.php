<?php

namespace SForce\Wsdl;

class DescribeSearchableEntityResult
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
     * @var string
     */
    protected $pluralLabel = null;

    /**
     * @param string $label
     * @param string $name
     * @param string $pluralLabel
     */
    public function __construct($label = null, $name = null, $pluralLabel = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->pluralLabel = $pluralLabel;
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
     * @return \SForce\Wsdl\DescribeSearchableEntityResult
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
     * @return \SForce\Wsdl\DescribeSearchableEntityResult
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPluralLabel()
    {
        return $this->pluralLabel;
    }

    /**
     * @param string $pluralLabel
     * @return \SForce\Wsdl\DescribeSearchableEntityResult
     */
    public function setPluralLabel($pluralLabel)
    {
        $this->pluralLabel = $pluralLabel;
        return $this;
    }
}
