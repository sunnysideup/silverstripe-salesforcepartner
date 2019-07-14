<?php

namespace SForce\Wsdl;

class DescribeDataCategoryGroupResult
{
    /**
     * @var int
     */
    protected $categoryCount = null;

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
     * @param int $categoryCount
     * @param string $description
     * @param string $label
     * @param string $name
     * @param string $sobject
     */
    public function __construct($categoryCount = null, $description = null, $label = null, $name = null, $sobject = null)
    {
        $this->categoryCount = $categoryCount;
        $this->description = $description;
        $this->label = $label;
        $this->name = $name;
        $this->sobject = $sobject;
    }

    /**
     * @return int
     */
    public function getCategoryCount()
    {
        return $this->categoryCount;
    }

    /**
     * @param int $categoryCount
     * @return \SForce\Wsdl\DescribeDataCategoryGroupResult
     */
    public function setCategoryCount($categoryCount)
    {
        $this->categoryCount = $categoryCount;
        return $this;
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
     * @return \SForce\Wsdl\DescribeDataCategoryGroupResult
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
     * @return \SForce\Wsdl\DescribeDataCategoryGroupResult
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
     * @return \SForce\Wsdl\DescribeDataCategoryGroupResult
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
     * @return \SForce\Wsdl\DescribeDataCategoryGroupResult
     */
    public function setSobject($sobject)
    {
        $this->sobject = $sobject;
        return $this;
    }
}
