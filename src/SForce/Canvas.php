<?php

namespace SForce\Wsdl;

class Canvas extends DescribeLayoutComponent
{
    /**
     * @var string
     */
    protected $displayLocation = null;

    /**
     * @var string
     */
    protected $referenceId = null;

    /**
     * @var boolean
     */
    protected $showLabel = null;

    /**
     * @var boolean
     */
    protected $showScrollbars = null;

    /**
     * @var string
     */
    protected $suggestedHeight = null;

    /**
     * @var string
     */
    protected $suggestedWidth = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     * @param string $displayLocation
     * @param string $referenceId
     * @param boolean $showLabel
     * @param boolean $showScrollbars
     * @param string $suggestedHeight
     * @param string $suggestedWidth
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $displayLocation = null, $referenceId = null, $showLabel = null, $showScrollbars = null, $suggestedHeight = null, $suggestedWidth = null)
    {
        parent::__construct($displayLines, $tabOrder, $type);
        $this->displayLocation = $displayLocation;
        $this->referenceId = $referenceId;
        $this->showLabel = $showLabel;
        $this->showScrollbars = $showScrollbars;
        $this->suggestedHeight = $suggestedHeight;
        $this->suggestedWidth = $suggestedWidth;
    }

    /**
     * @return string
     */
    public function getDisplayLocation()
    {
        return $this->displayLocation;
    }

    /**
     * @param string $displayLocation
     * @return \SForce\Wsdl\Canvas
     */
    public function setDisplayLocation($displayLocation)
    {
        $this->displayLocation = $displayLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param string $referenceId
     * @return \SForce\Wsdl\Canvas
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowLabel()
    {
        return $this->showLabel;
    }

    /**
     * @param boolean $showLabel
     * @return \SForce\Wsdl\Canvas
     */
    public function setShowLabel($showLabel)
    {
        $this->showLabel = $showLabel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowScrollbars()
    {
        return $this->showScrollbars;
    }

    /**
     * @param boolean $showScrollbars
     * @return \SForce\Wsdl\Canvas
     */
    public function setShowScrollbars($showScrollbars)
    {
        $this->showScrollbars = $showScrollbars;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuggestedHeight()
    {
        return $this->suggestedHeight;
    }

    /**
     * @param string $suggestedHeight
     * @return \SForce\Wsdl\Canvas
     */
    public function setSuggestedHeight($suggestedHeight)
    {
        $this->suggestedHeight = $suggestedHeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuggestedWidth()
    {
        return $this->suggestedWidth;
    }

    /**
     * @param string $suggestedWidth
     * @return \SForce\Wsdl\Canvas
     */
    public function setSuggestedWidth($suggestedWidth)
    {
        $this->suggestedWidth = $suggestedWidth;
        return $this;
    }
}
