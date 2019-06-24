<?php

namespace SForce\Wsdl;

class DescribeThemeItem
{

    /**
     * @var DescribeColor[] $colors
     */
    protected $colors = null;

    /**
     * @var DescribeIcon[] $icons
     */
    protected $icons = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
      $this->name = $name;
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
     * @return \SForce\Wsdl\DescribeThemeItem
     */
    public function setColors(array $colors = null)
    {
      $this->colors = $colors;
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
     * @return \SForce\Wsdl\DescribeThemeItem
     */
    public function setIcons(array $icons = null)
    {
      $this->icons = $icons;
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
     * @return \SForce\Wsdl\DescribeThemeItem
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
