<?php

namespace SForce\Wsdl;

class DescribeLayoutButton
{
    /**
     * @var WebLinkWindowType
     */
    protected $behavior = null;

    /**
     * @var DescribeColor[]
     */
    protected $colors = null;

    /**
     * @var string
     */
    protected $content = null;

    /**
     * @var WebLinkType
     */
    protected $contentSource = null;

    /**
     * @var boolean
     */
    protected $custom = null;

    /**
     * @var string
     */
    protected $encoding = null;

    /**
     * @var int
     */
    protected $height = null;

    /**
     * @var DescribeIcon[]
     */
    protected $icons = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var boolean
     */
    protected $menubar = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $overridden = null;

    /**
     * @var boolean
     */
    protected $resizeable = null;

    /**
     * @var boolean
     */
    protected $scrollbars = null;

    /**
     * @var boolean
     */
    protected $showsLocation = null;

    /**
     * @var boolean
     */
    protected $showsStatus = null;

    /**
     * @var boolean
     */
    protected $toolbar = null;

    /**
     * @var string
     */
    protected $url = null;

    /**
     * @var int
     */
    protected $width = null;

    /**
     * @var WebLinkPosition
     */
    protected $windowPosition = null;

    /**
     * @param boolean $custom
     * @param boolean $overridden
     */
    public function __construct($custom = null, $overridden = null)
    {
        $this->custom = $custom;
        $this->overridden = $overridden;
    }

    /**
     * @return WebLinkWindowType
     */
    public function getBehavior()
    {
        return $this->behavior;
    }

    /**
     * @param WebLinkWindowType $behavior
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setBehavior($behavior)
    {
        $this->behavior = $behavior;
        return $this;
    }

    /**
     * @return DescribeColor[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param DescribeColor[] $colors
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setColors(array $colors = null)
    {
        $this->colors = $colors;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return WebLinkType
     */
    public function getContentSource()
    {
        return $this->contentSource;
    }

    /**
     * @param WebLinkType $contentSource
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setContentSource($contentSource)
    {
        $this->contentSource = $contentSource;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param boolean $custom
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * @param string $encoding
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return DescribeIcon[]
     */
    public function getIcons()
    {
        return $this->icons;
    }

    /**
     * @param DescribeIcon[] $icons
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setIcons(array $icons = null)
    {
        $this->icons = $icons;
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
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMenubar()
    {
        return $this->menubar;
    }

    /**
     * @param boolean $menubar
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setMenubar($menubar)
    {
        $this->menubar = $menubar;
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
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOverridden()
    {
        return $this->overridden;
    }

    /**
     * @param boolean $overridden
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setOverridden($overridden)
    {
        $this->overridden = $overridden;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getResizeable()
    {
        return $this->resizeable;
    }

    /**
     * @param boolean $resizeable
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setResizeable($resizeable)
    {
        $this->resizeable = $resizeable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getScrollbars()
    {
        return $this->scrollbars;
    }

    /**
     * @param boolean $scrollbars
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setScrollbars($scrollbars)
    {
        $this->scrollbars = $scrollbars;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowsLocation()
    {
        return $this->showsLocation;
    }

    /**
     * @param boolean $showsLocation
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setShowsLocation($showsLocation)
    {
        $this->showsLocation = $showsLocation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowsStatus()
    {
        return $this->showsStatus;
    }

    /**
     * @param boolean $showsStatus
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setShowsStatus($showsStatus)
    {
        $this->showsStatus = $showsStatus;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getToolbar()
    {
        return $this->toolbar;
    }

    /**
     * @param boolean $toolbar
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setToolbar($toolbar)
    {
        $this->toolbar = $toolbar;
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
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return WebLinkPosition
     */
    public function getWindowPosition()
    {
        return $this->windowPosition;
    }

    /**
     * @param WebLinkPosition $windowPosition
     * @return \SForce\Wsdl\DescribeLayoutButton
     */
    public function setWindowPosition($windowPosition)
    {
        $this->windowPosition = $windowPosition;
        return $this;
    }
}
