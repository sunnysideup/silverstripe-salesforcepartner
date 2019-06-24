<?php

namespace SForce\Wsdl;

class DescribeAppMenuItem
{

    /**
     * @var DescribeColor[] $colors
     */
    protected $colors = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var DescribeIcon[] $icons
     */
    protected $icons = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param string $content
     * @param string $label
     * @param string $name
     * @param string $type
     * @param string $url
     */
    public function __construct($content = null, $label = null, $name = null, $type = null, $url = null)
    {
      $this->content = $content;
      $this->label = $label;
      $this->name = $name;
      $this->type = $type;
      $this->url = $url;
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
     * @return \SForce\Wsdl\DescribeAppMenuItem
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
     * @return \SForce\Wsdl\DescribeAppMenuItem
     */
    public function setContent($content)
    {
      $this->content = $content;
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
     * @return \SForce\Wsdl\DescribeAppMenuItem
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
     * @return \SForce\Wsdl\DescribeAppMenuItem
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
     * @return \SForce\Wsdl\DescribeAppMenuItem
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
     * @return \SForce\Wsdl\DescribeAppMenuItem
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \SForce\Wsdl\DescribeAppMenuItem
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
