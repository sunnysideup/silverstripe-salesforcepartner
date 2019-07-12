<?php

namespace SForce\Wsdl;

class RelatedList
{
    /**
     * @var ShareAccessLevel
     */
    protected $accessLevelRequiredForCreate = null;

    /**
     * @var DescribeLayoutButton[]
     */
    protected $buttons = null;

    /**
     * @var RelatedListColumn[]
     */
    protected $columns = null;

    /**
     * @var boolean
     */
    protected $custom = null;

    /**
     * @var string
     */
    protected $field = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var int
     */
    protected $limitRows = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $sobject = null;

    /**
     * @var RelatedListSort[]
     */
    protected $sort = null;

    /**
     * @param RelatedListColumn[] $columns
     * @param boolean $custom
     * @param string $label
     * @param int $limitRows
     * @param string $name
     */
    public function __construct(array $columns = null, $custom = null, $label = null, $limitRows = null, $name = null)
    {
        $this->columns = $columns;
        $this->custom = $custom;
        $this->label = $label;
        $this->limitRows = $limitRows;
        $this->name = $name;
    }

    /**
     * @return ShareAccessLevel
     */
    public function getAccessLevelRequiredForCreate()
    {
        return $this->accessLevelRequiredForCreate;
    }

    /**
     * @param ShareAccessLevel $accessLevelRequiredForCreate
     * @return \SForce\Wsdl\RelatedList
     */
    public function setAccessLevelRequiredForCreate($accessLevelRequiredForCreate)
    {
        $this->accessLevelRequiredForCreate = $accessLevelRequiredForCreate;
        return $this;
    }

    /**
     * @return DescribeLayoutButton[]
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * @param DescribeLayoutButton[] $buttons
     * @return \SForce\Wsdl\RelatedList
     */
    public function setButtons(array $buttons = null)
    {
        $this->buttons = $buttons;
        return $this;
    }

    /**
     * @return RelatedListColumn[]
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param RelatedListColumn[] $columns
     * @return \SForce\Wsdl\RelatedList
     */
    public function setColumns(array $columns)
    {
        $this->columns = $columns;
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
     * @return \SForce\Wsdl\RelatedList
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
        return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return \SForce\Wsdl\RelatedList
     */
    public function setField($field)
    {
        $this->field = $field;
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
     * @return \SForce\Wsdl\RelatedList
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitRows()
    {
        return $this->limitRows;
    }

    /**
     * @param int $limitRows
     * @return \SForce\Wsdl\RelatedList
     */
    public function setLimitRows($limitRows)
    {
        $this->limitRows = $limitRows;
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
     * @return \SForce\Wsdl\RelatedList
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSobject()
    {
        return $this->sobject;
    }

    /**
     * @param string $sobject
     * @return \SForce\Wsdl\RelatedList
     */
    public function setSobject($sobject)
    {
        $this->sobject = $sobject;
        return $this;
    }

    /**
     * @return RelatedListSort[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param RelatedListSort[] $sort
     * @return \SForce\Wsdl\RelatedList
     */
    public function setSort(array $sort = null)
    {
        $this->sort = $sort;
        return $this;
    }
}
