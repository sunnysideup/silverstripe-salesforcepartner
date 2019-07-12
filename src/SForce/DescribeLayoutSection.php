<?php

namespace SForce\Wsdl;

class DescribeLayoutSection
{

    /**
     * @var boolean $collapsed
     */
    protected $collapsed = null;

    /**
     * @var int $columns
     */
    protected $columns = null;

    /**
     * @var string $heading
     */
    protected $heading = null;

    /**
     * @var DescribeLayoutRow[] $layoutRows
     */
    protected $layoutRows = null;

    /**
     * @var ID $layoutSectionId
     */
    protected $layoutSectionId = null;

    /**
     * @var ID $parentLayoutId
     */
    protected $parentLayoutId = null;

    /**
     * @var int $rows
     */
    protected $rows = null;

    /**
     * @var TabOrderType $tabOrder
     */
    protected $tabOrder = null;

    /**
     * @var boolean $useCollapsibleSection
     */
    protected $useCollapsibleSection = null;

    /**
     * @var boolean $useHeading
     */
    protected $useHeading = null;

    /**
     * @param boolean $collapsed
     * @param int $columns
     * @param DescribeLayoutRow[] $layoutRows
     * @param ID $parentLayoutId
     * @param int $rows
     * @param TabOrderType $tabOrder
     * @param boolean $useCollapsibleSection
     * @param boolean $useHeading
     */
    public function __construct($collapsed = null, $columns = null, array $layoutRows = null, $parentLayoutId = null, $rows = null, $tabOrder = null, $useCollapsibleSection = null, $useHeading = null)
    {
      $this->collapsed = $collapsed;
      $this->columns = $columns;
      $this->layoutRows = $layoutRows;
      $this->parentLayoutId = $parentLayoutId;
      $this->rows = $rows;
      $this->tabOrder = $tabOrder;
      $this->useCollapsibleSection = $useCollapsibleSection;
      $this->useHeading = $useHeading;
    }

    /**
     * @return boolean
     */
    public function getCollapsed()
    {
      return $this->collapsed;
    }

    /**
     * @param boolean $collapsed
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setCollapsed($collapsed)
    {
      $this->collapsed = $collapsed;
      return $this;
    }

    /**
     * @return int
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param int $columns
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setColumns($columns)
    {
      $this->columns = $columns;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeading()
    {
      return $this->heading;
    }

    /**
     * @param string $heading
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setHeading($heading)
    {
      $this->heading = $heading;
      return $this;
    }

    /**
     * @return DescribeLayoutRow[]
     */
    public function getLayoutRows()
    {
      return $this->layoutRows;
    }

    /**
     * @param DescribeLayoutRow[] $layoutRows
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setLayoutRows(array $layoutRows)
    {
      $this->layoutRows = $layoutRows;
      return $this;
    }

    /**
     * @return ID
     */
    public function getLayoutSectionId()
    {
      return $this->layoutSectionId;
    }

    /**
     * @param ID $layoutSectionId
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setLayoutSectionId($layoutSectionId)
    {
      $this->layoutSectionId = $layoutSectionId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getParentLayoutId()
    {
      return $this->parentLayoutId;
    }

    /**
     * @param ID $parentLayoutId
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setParentLayoutId($parentLayoutId)
    {
      $this->parentLayoutId = $parentLayoutId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRows()
    {
      return $this->rows;
    }

    /**
     * @param int $rows
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setRows($rows)
    {
      $this->rows = $rows;
      return $this;
    }

    /**
     * @return TabOrderType
     */
    public function getTabOrder()
    {
      return $this->tabOrder;
    }

    /**
     * @param TabOrderType $tabOrder
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setTabOrder($tabOrder)
    {
      $this->tabOrder = $tabOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseCollapsibleSection()
    {
      return $this->useCollapsibleSection;
    }

    /**
     * @param boolean $useCollapsibleSection
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setUseCollapsibleSection($useCollapsibleSection)
    {
      $this->useCollapsibleSection = $useCollapsibleSection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseHeading()
    {
      return $this->useHeading;
    }

    /**
     * @param boolean $useHeading
     * @return \SForce\Wsdl\DescribeLayoutSection
     */
    public function setUseHeading($useHeading)
    {
      $this->useHeading = $useHeading;
      return $this;
    }

}
