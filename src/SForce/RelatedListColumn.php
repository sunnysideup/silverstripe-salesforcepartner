<?php

namespace SForce\Wsdl;

class RelatedListColumn
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string $fieldApiName
     */
    protected $fieldApiName = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $lookupId
     */
    protected $lookupId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $sortable
     */
    protected $sortable = null;

    /**
     * @param string $fieldApiName
     * @param string $label
     * @param string $name
     * @param boolean $sortable
     */
    public function __construct($fieldApiName = null, $label = null, $name = null, $sortable = null)
    {
      $this->fieldApiName = $fieldApiName;
      $this->label = $label;
      $this->name = $name;
      $this->sortable = $sortable;
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
     * @return \SForce\Wsdl\RelatedListColumn
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldApiName()
    {
      return $this->fieldApiName;
    }

    /**
     * @param string $fieldApiName
     * @return \SForce\Wsdl\RelatedListColumn
     */
    public function setFieldApiName($fieldApiName)
    {
      $this->fieldApiName = $fieldApiName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param string $format
     * @return \SForce\Wsdl\RelatedListColumn
     */
    public function setFormat($format)
    {
      $this->format = $format;
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
     * @return \SForce\Wsdl\RelatedListColumn
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getLookupId()
    {
      return $this->lookupId;
    }

    /**
     * @param string $lookupId
     * @return \SForce\Wsdl\RelatedListColumn
     */
    public function setLookupId($lookupId)
    {
      $this->lookupId = $lookupId;
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
     * @return \SForce\Wsdl\RelatedListColumn
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \SForce\Wsdl\RelatedListColumn
     */
    public function setSortable($sortable)
    {
      $this->sortable = $sortable;
      return $this;
    }

}
