<?php

namespace SForce\Wsdl;

class AnalyticsCloudComponent extends DescribeLayoutComponent
{

    /**
     * @var string $error
     */
    protected $error = null;

    /**
     * @var string $filter
     */
    protected $filter = null;

    /**
     * @var string $height
     */
    protected $height = null;

    /**
     * @var boolean $hideOnError
     */
    protected $hideOnError = null;

    /**
     * @var boolean $showSharing
     */
    protected $showSharing = null;

    /**
     * @var boolean $showTitle
     */
    protected $showTitle = null;

    /**
     * @var string $width
     */
    protected $width = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     * @param string $error
     * @param string $filter
     * @param string $height
     * @param boolean $hideOnError
     * @param boolean $showSharing
     * @param boolean $showTitle
     * @param string $width
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $error = null, $filter = null, $height = null, $hideOnError = null, $showSharing = null, $showTitle = null, $width = null)
    {
      parent::__construct($displayLines, $tabOrder, $type);
      $this->error = $error;
      $this->filter = $filter;
      $this->height = $height;
      $this->hideOnError = $hideOnError;
      $this->showSharing = $showSharing;
      $this->showTitle = $showTitle;
      $this->width = $width;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param string $error
     * @return \SForce\Wsdl\AnalyticsCloudComponent
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param string $filter
     * @return \SForce\Wsdl\AnalyticsCloudComponent
     */
    public function setFilter($filter)
    {
      $this->filter = $filter;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param string $height
     * @return \SForce\Wsdl\AnalyticsCloudComponent
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideOnError()
    {
      return $this->hideOnError;
    }

    /**
     * @param boolean $hideOnError
     * @return \SForce\Wsdl\AnalyticsCloudComponent
     */
    public function setHideOnError($hideOnError)
    {
      $this->hideOnError = $hideOnError;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowSharing()
    {
      return $this->showSharing;
    }

    /**
     * @param boolean $showSharing
     * @return \SForce\Wsdl\AnalyticsCloudComponent
     */
    public function setShowSharing($showSharing)
    {
      $this->showSharing = $showSharing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowTitle()
    {
      return $this->showTitle;
    }

    /**
     * @param boolean $showTitle
     * @return \SForce\Wsdl\AnalyticsCloudComponent
     */
    public function setShowTitle($showTitle)
    {
      $this->showTitle = $showTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param string $width
     * @return \SForce\Wsdl\AnalyticsCloudComponent
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

}
