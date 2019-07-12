<?php

namespace SForce\Wsdl;

class DataCategory
{
    /**
     * @var DataCategory[]
     */
    protected $childCategories = null;

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
     * @return DataCategory[]
     */
    public function getChildCategories()
    {
        return $this->childCategories;
    }

    /**
     * @param DataCategory[] $childCategories
     * @return \SForce\Wsdl\DataCategory
     */
    public function setChildCategories(array $childCategories = null)
    {
        $this->childCategories = $childCategories;
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
     * @return \SForce\Wsdl\DataCategory
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
     * @return \SForce\Wsdl\DataCategory
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
