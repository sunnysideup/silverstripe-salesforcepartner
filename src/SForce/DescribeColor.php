<?php

namespace SForce\Wsdl;

class DescribeColor
{
    /**
     * @var string
     */
    protected $color = null;

    /**
     * @var string
     */
    protected $context = null;

    /**
     * @var string
     */
    protected $theme = null;

    /**
     * @param string $color
     * @param string $context
     * @param string $theme
     */
    public function __construct($color = null, $context = null, $theme = null)
    {
        $this->color = $color;
        $this->context = $context;
        $this->theme = $theme;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return \SForce\Wsdl\DescribeColor
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $context
     * @return \SForce\Wsdl\DescribeColor
     */
    public function setContext($context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     * @return \SForce\Wsdl\DescribeColor
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }
}
