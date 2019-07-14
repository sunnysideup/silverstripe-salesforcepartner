<?php

namespace SForce\Wsdl;

class DescribeAvailableQuickActionResult
{
    /**
     * @var string
     */
    protected $actionEnumOrId = null;

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
    protected $type = null;

    /**
     * @param string $actionEnumOrId
     * @param string $label
     * @param string $name
     * @param string $type
     */
    public function __construct($actionEnumOrId = null, $label = null, $name = null, $type = null)
    {
        $this->actionEnumOrId = $actionEnumOrId;
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getActionEnumOrId()
    {
        return $this->actionEnumOrId;
    }

    /**
     * @param string $actionEnumOrId
     * @return \SForce\Wsdl\DescribeAvailableQuickActionResult
     */
    public function setActionEnumOrId($actionEnumOrId)
    {
        $this->actionEnumOrId = $actionEnumOrId;
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
     * @return \SForce\Wsdl\DescribeAvailableQuickActionResult
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
     * @return \SForce\Wsdl\DescribeAvailableQuickActionResult
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \SForce\Wsdl\DescribeAvailableQuickActionResult
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
