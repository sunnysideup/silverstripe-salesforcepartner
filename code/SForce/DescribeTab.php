<?php

namespace SForce\Wsdl;

class DescribeTab
{

    /**
     * @var DescribeColor[] $colors
     */
    protected $colors = null;

    /**
     * @var boolean $custom
     */
    protected $custom = null;

    /**
     * @var string $iconUrl
     */
    protected $iconUrl = null;

    /**
     * @var DescribeIcon[] $icons
     */
    protected $icons = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $miniIconUrl
     */
    protected $miniIconUrl = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $sobjectName
     */
    protected $sobjectName = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param boolean $custom
     * @param string $iconUrl
     * @param string $label
     * @param string $miniIconUrl
     * @param string $name
     * @param string $url
     */
    public function __construct($custom = null, $iconUrl = null, $label = null, $miniIconUrl = null, $name = null, $url = null)
    {
      $this->custom = $custom;
      $this->iconUrl = $iconUrl;
      $this->label = $label;
      $this->miniIconUrl = $miniIconUrl;
      $this->name = $name;
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
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setColors(array $colors = null)
    {
      $this->colors = $colors;
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
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setCustom($custom)
    {
      $this->custom = $custom;
      return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl()
    {
      return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setIconUrl($iconUrl)
    {
      $this->iconUrl = $iconUrl;
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
     * @return \SForce\Wsdl\DescribeTab
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
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiniIconUrl()
    {
      return $this->miniIconUrl;
    }

    /**
     * @param string $miniIconUrl
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setMiniIconUrl($miniIconUrl)
    {
      $this->miniIconUrl = $miniIconUrl;
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
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSobjectName()
    {
      return $this->sobjectName;
    }

    /**
     * @param string $sobjectName
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setSobjectName($sobjectName)
    {
      $this->sobjectName = $sobjectName;
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
     * @return \SForce\Wsdl\DescribeTab
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
