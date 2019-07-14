<?php

namespace SForce\Wsdl;

class DescribeTabSetResult
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
    protected $logoUrl = null;

    /**
     * @var string
     */
    protected $namespace = null;

    /**
     * @var boolean
     */
    protected $selected = null;

    /**
     * @var string
     */
    protected $tabSetId = null;

    /**
     * @var DescribeTab[]
     */
    protected $tabs = null;

    /**
     * @param string $description
     * @param string $label
     * @param string $logoUrl
     * @param boolean $selected
     * @param string $tabSetId
     */
    public function __construct($description = null, $label = null, $logoUrl = null, $selected = null, $tabSetId = null)
    {
        $this->description = $description;
        $this->label = $label;
        $this->logoUrl = $logoUrl;
        $this->selected = $selected;
        $this->tabSetId = $tabSetId;
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
     * @return \SForce\Wsdl\DescribeTabSetResult
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
     * @return \SForce\Wsdl\DescribeTabSetResult
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     * @return \SForce\Wsdl\DescribeTabSetResult
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     * @return \SForce\Wsdl\DescribeTabSetResult
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param boolean $selected
     * @return \SForce\Wsdl\DescribeTabSetResult
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
        return $this;
    }

    /**
     * @return string
     */
    public function getTabSetId()
    {
        return $this->tabSetId;
    }

    /**
     * @param string $tabSetId
     * @return \SForce\Wsdl\DescribeTabSetResult
     */
    public function setTabSetId($tabSetId)
    {
        $this->tabSetId = $tabSetId;
        return $this;
    }

    /**
     * @return DescribeTab[]
     */
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * @param DescribeTab[] $tabs
     * @return \SForce\Wsdl\DescribeTabSetResult
     */
    public function setTabs(array $tabs = null)
    {
        $this->tabs = $tabs;
        return $this;
    }
}
