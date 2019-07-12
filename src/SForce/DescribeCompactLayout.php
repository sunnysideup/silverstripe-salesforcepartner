<?php

namespace SForce\Wsdl;

class DescribeCompactLayout
{
    /**
     * @var DescribeLayoutButton[]
     */
    protected $actions = null;

    /**
     * @var DescribeLayoutItem[]
     */
    protected $fieldItems = null;

    /**
     * @var ID
     */
    protected $id = null;

    /**
     * @var DescribeLayoutItem[]
     */
    protected $imageItems = null;

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
    protected $objectType = null;

    /**
     * @param ID $id
     * @param string $label
     * @param string $name
     * @param string $objectType
     */
    public function __construct($id = null, $label = null, $name = null, $objectType = null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->objectType = $objectType;
    }

    /**
     * @return DescribeLayoutButton[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param DescribeLayoutButton[] $actions
     * @return \SForce\Wsdl\DescribeCompactLayout
     */
    public function setActions(array $actions = null)
    {
        $this->actions = $actions;
        return $this;
    }

    /**
     * @return DescribeLayoutItem[]
     */
    public function getFieldItems()
    {
        return $this->fieldItems;
    }

    /**
     * @param DescribeLayoutItem[] $fieldItems
     * @return \SForce\Wsdl\DescribeCompactLayout
     */
    public function setFieldItems(array $fieldItems = null)
    {
        $this->fieldItems = $fieldItems;
        return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ID $id
     * @return \SForce\Wsdl\DescribeCompactLayout
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return DescribeLayoutItem[]
     */
    public function getImageItems()
    {
        return $this->imageItems;
    }

    /**
     * @param DescribeLayoutItem[] $imageItems
     * @return \SForce\Wsdl\DescribeCompactLayout
     */
    public function setImageItems(array $imageItems = null)
    {
        $this->imageItems = $imageItems;
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
     * @return \SForce\Wsdl\DescribeCompactLayout
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
     * @return \SForce\Wsdl\DescribeCompactLayout
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     * @return \SForce\Wsdl\DescribeCompactLayout
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }
}
