<?php

namespace SForce\Wsdl;

class DescribeQuickActionListItemResult
{

    /**
     * @var ShareAccessLevel $accessLevelRequired
     */
    protected $accessLevelRequired = null;

    /**
     * @var DescribeColor[] $colors
     */
    protected $colors = null;

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
     * @var string $quickActionName
     */
    protected $quickActionName = null;

    /**
     * @var string $targetSobjectType
     */
    protected $targetSobjectType = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param string $label
     * @param string $miniIconUrl
     * @param string $quickActionName
     * @param string $type
     */
    public function __construct($label = null, $miniIconUrl = null, $quickActionName = null, $type = null)
    {
      $this->label = $label;
      $this->miniIconUrl = $miniIconUrl;
      $this->quickActionName = $quickActionName;
      $this->type = $type;
    }

    /**
     * @return ShareAccessLevel
     */
    public function getAccessLevelRequired()
    {
      return $this->accessLevelRequired;
    }

    /**
     * @param ShareAccessLevel $accessLevelRequired
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
     */
    public function setAccessLevelRequired($accessLevelRequired)
    {
      $this->accessLevelRequired = $accessLevelRequired;
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
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
     */
    public function setColors(array $colors = null)
    {
      $this->colors = $colors;
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
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
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
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
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
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
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
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
     */
    public function setMiniIconUrl($miniIconUrl)
    {
      $this->miniIconUrl = $miniIconUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuickActionName()
    {
      return $this->quickActionName;
    }

    /**
     * @param string $quickActionName
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
     */
    public function setQuickActionName($quickActionName)
    {
      $this->quickActionName = $quickActionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetSobjectType()
    {
      return $this->targetSobjectType;
    }

    /**
     * @param string $targetSobjectType
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
     */
    public function setTargetSobjectType($targetSobjectType)
    {
      $this->targetSobjectType = $targetSobjectType;
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
     * @return \SForce\Wsdl\DescribeQuickActionListItemResult
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
