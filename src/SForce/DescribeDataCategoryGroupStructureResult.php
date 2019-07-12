<?php

namespace SForce\Wsdl;

class DescribeDataCategoryGroupStructureResult
{
    /**
     * @var string
     */
    protected $description = null;

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
    protected $sobject = null;

    /**
     * @var DataCategory[]
     */
    protected $topCategories = null;

    /**
     * @param string $description
     * @param string $label
     * @param string $name
     * @param string $sobject
     */
    public function __construct($description = null, $label = null, $name = null, $sobject = null)
    {
        $this->description = $description;
        $this->label = $label;
        $this->name = $name;
        $this->sobject = $sobject;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \SForce\Wsdl\DescribeDataCategoryGroupStructureResult
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return \SForce\Wsdl\DescribeDataCategoryGroupStructureResult
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
     * @return \SForce\Wsdl\DescribeDataCategoryGroupStructureResult
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSobject()
    {
        return $this->sobject;
    }

    /**
     * @param string $sobject
     * @return \SForce\Wsdl\DescribeDataCategoryGroupStructureResult
     */
    public function setSobject($sobject)
    {
        $this->sobject = $sobject;
        return $this;
    }

    /**
     * @return DataCategory[]
     */
    public function getTopCategories()
    {
        return $this->topCategories;
    }

    /**
     * @param DataCategory[] $topCategories
     * @return \SForce\Wsdl\DescribeDataCategoryGroupStructureResult
     */
    public function setTopCategories(array $topCategories = null)
    {
        $this->topCategories = $topCategories;
        return $this;
    }
}
