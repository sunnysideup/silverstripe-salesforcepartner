<?php

namespace SForce\Wsdl;

class VisualforcePage extends DescribeLayoutComponent
{
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
     * @var string
     */
    protected $url = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     * @param boolean $showLabel
     * @param boolean $showScrollbars
     * @param string $suggestedHeight
     * @param string $suggestedWidth
     * @param string $url
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $showLabel = null, $showScrollbars = null, $suggestedHeight = null, $suggestedWidth = null, $url = null)
    {
        parent::__construct($displayLines, $tabOrder, $type);
        $this->showLabel = $showLabel;
        $this->showScrollbars = $showScrollbars;
        $this->suggestedHeight = $suggestedHeight;
        $this->suggestedWidth = $suggestedWidth;
        $this->url = $url;
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
     * @return \SForce\Wsdl\VisualforcePage
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
     * @return \SForce\Wsdl\VisualforcePage
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
     * @return \SForce\Wsdl\VisualforcePage
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
     * @return \SForce\Wsdl\VisualforcePage
     */
    public function setSuggestedWidth($suggestedWidth)
    {
        $this->suggestedWidth = $suggestedWidth;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return \SForce\Wsdl\VisualforcePage
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
}
