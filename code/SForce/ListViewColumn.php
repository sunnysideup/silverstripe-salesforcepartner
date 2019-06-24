<?php

namespace SForce\Wsdl;

class ListViewColumn
{

    /**
     * @var string $ascendingLabel
     */
    protected $ascendingLabel = null;

    /**
     * @var string $descendingLabel
     */
    protected $descendingLabel = null;

    /**
     * @var string $fieldNameOrPath
     */
    protected $fieldNameOrPath = null;

    /**
     * @var boolean $hidden
     */
    protected $hidden = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var boolean $searchable
     */
    protected $searchable = null;

    /**
     * @var string $selectListItem
     */
    protected $selectListItem = null;

    /**
     * @var orderByDirection $sortDirection
     */
    protected $sortDirection = null;

    /**
     * @var int $sortIndex
     */
    protected $sortIndex = null;

    /**
     * @var boolean $sortable
     */
    protected $sortable = null;

    /**
     * @var fieldType $type
     */
    protected $type = null;

    /**
     * @param string $fieldNameOrPath
     * @param boolean $hidden
     * @param string $label
     * @param boolean $searchable
     * @param string $selectListItem
     * @param boolean $sortable
     * @param fieldType $type
     */
    public function __construct($fieldNameOrPath = null, $hidden = null, $label = null, $searchable = null, $selectListItem = null, $sortable = null, $type = null)
    {
      $this->fieldNameOrPath = $fieldNameOrPath;
      $this->hidden = $hidden;
      $this->label = $label;
      $this->searchable = $searchable;
      $this->selectListItem = $selectListItem;
      $this->sortable = $sortable;
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAscendingLabel()
    {
      return $this->ascendingLabel;
    }

    /**
     * @param string $ascendingLabel
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setAscendingLabel($ascendingLabel)
    {
      $this->ascendingLabel = $ascendingLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescendingLabel()
    {
      return $this->descendingLabel;
    }

    /**
     * @param string $descendingLabel
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setDescendingLabel($descendingLabel)
    {
      $this->descendingLabel = $descendingLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldNameOrPath()
    {
      return $this->fieldNameOrPath;
    }

    /**
     * @param string $fieldNameOrPath
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setFieldNameOrPath($fieldNameOrPath)
    {
      $this->fieldNameOrPath = $fieldNameOrPath;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHidden()
    {
      return $this->hidden;
    }

    /**
     * @param boolean $hidden
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setHidden($hidden)
    {
      $this->hidden = $hidden;
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
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchable()
    {
      return $this->searchable;
    }

    /**
     * @param boolean $searchable
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setSearchable($searchable)
    {
      $this->searchable = $searchable;
      return $this;
    }

    /**
     * @return string
     */
    public function getSelectListItem()
    {
      return $this->selectListItem;
    }

    /**
     * @param string $selectListItem
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setSelectListItem($selectListItem)
    {
      $this->selectListItem = $selectListItem;
      return $this;
    }

    /**
     * @return orderByDirection
     */
    public function getSortDirection()
    {
      return $this->sortDirection;
    }

    /**
     * @param orderByDirection $sortDirection
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setSortDirection($sortDirection)
    {
      $this->sortDirection = $sortDirection;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortIndex()
    {
      return $this->sortIndex;
    }

    /**
     * @param int $sortIndex
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setSortIndex($sortIndex)
    {
      $this->sortIndex = $sortIndex;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSortable()
    {
      return $this->sortable;
    }

    /**
     * @param boolean $sortable
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setSortable($sortable)
    {
      $this->sortable = $sortable;
      return $this;
    }

    /**
     * @return fieldType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param fieldType $type
     * @return \SForce\Wsdl\ListViewColumn
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
