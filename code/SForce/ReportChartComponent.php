<?php

namespace SForce\Wsdl;

class ReportChartComponent extends DescribeLayoutComponent
{

    /**
     * @var boolean $cacheData
     */
    protected $cacheData = null;

    /**
     * @var string $contextFilterableField
     */
    protected $contextFilterableField = null;

    /**
     * @var string $error
     */
    protected $error = null;

    /**
     * @var boolean $hideOnError
     */
    protected $hideOnError = null;

    /**
     * @var boolean $includeContext
     */
    protected $includeContext = null;

    /**
     * @var boolean $showTitle
     */
    protected $showTitle = null;

    /**
     * @var ReportChartSize $size
     */
    protected $size = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     * @param boolean $cacheData
     * @param string $contextFilterableField
     * @param string $error
     * @param boolean $hideOnError
     * @param boolean $includeContext
     * @param boolean $showTitle
     * @param ReportChartSize $size
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $cacheData = null, $contextFilterableField = null, $error = null, $hideOnError = null, $includeContext = null, $showTitle = null, $size = null)
    {
      parent::__construct($displayLines, $tabOrder, $type);
      $this->cacheData = $cacheData;
      $this->contextFilterableField = $contextFilterableField;
      $this->error = $error;
      $this->hideOnError = $hideOnError;
      $this->includeContext = $includeContext;
      $this->showTitle = $showTitle;
      $this->size = $size;
    }

    /**
     * @return boolean
     */
    public function getCacheData()
    {
      return $this->cacheData;
    }

    /**
     * @param boolean $cacheData
     * @return \SForce\Wsdl\ReportChartComponent
     */
    public function setCacheData($cacheData)
    {
      $this->cacheData = $cacheData;
      return $this;
    }

    /**
     * @return string
     */
    public function getContextFilterableField()
    {
      return $this->contextFilterableField;
    }

    /**
     * @param string $contextFilterableField
     * @return \SForce\Wsdl\ReportChartComponent
     */
    public function setContextFilterableField($contextFilterableField)
    {
      $this->contextFilterableField = $contextFilterableField;
      return $this;
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
     * @return \SForce\Wsdl\ReportChartComponent
     */
    public function setError($error)
    {
      $this->error = $error;
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
     * @return \SForce\Wsdl\ReportChartComponent
     */
    public function setHideOnError($hideOnError)
    {
      $this->hideOnError = $hideOnError;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeContext()
    {
      return $this->includeContext;
    }

    /**
     * @param boolean $includeContext
     * @return \SForce\Wsdl\ReportChartComponent
     */
    public function setIncludeContext($includeContext)
    {
      $this->includeContext = $includeContext;
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
     * @return \SForce\Wsdl\ReportChartComponent
     */
    public function setShowTitle($showTitle)
    {
      $this->showTitle = $showTitle;
      return $this;
    }

    /**
     * @return ReportChartSize
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param ReportChartSize $size
     * @return \SForce\Wsdl\ReportChartComponent
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

}
