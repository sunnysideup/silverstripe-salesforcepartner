<?php

namespace SForce\Wsdl;

class DescribeIcon
{
    /**
     * @var string
     */
    protected $contentType = null;

    /**
     * @var int
     */
    protected $height = null;

    /**
     * @var string
     */
    protected $theme = null;

    /**
     * @var string
     */
    protected $url = null;

    /**
     * @var int
     */
    protected $width = null;

    /**
     * @param string $contentType
     * @param string $theme
     * @param string $url
     */
    public function __construct($contentType = null, $theme = null, $url = null)
    {
        $this->contentType = $contentType;
        $this->theme = $theme;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return \SForce\Wsdl\DescribeIcon
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
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
     * @return \SForce\Wsdl\DescribeIcon
     */
    public function setHeight($height)
    {
        $this->height = $height;
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
     * @return \SForce\Wsdl\DescribeIcon
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
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
     * @return \SForce\Wsdl\DescribeIcon
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
     * @return \SForce\Wsdl\DescribeIcon
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }
}
