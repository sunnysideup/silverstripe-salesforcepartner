<?php

namespace SForce\Wsdl;

class DescribeColumn
{

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $field
     * @param string $label
     * @param string $name
     */
    public function __construct($field = null, $label = null, $name = null)
    {
      $this->field = $field;
      $this->label = $label;
      $this->name = $name;
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
     * @return \SForce\Wsdl\DescribeColumn
     */
    public function setField($field)
    {
      $this->field = $field;
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
     * @return \SForce\Wsdl\DescribeColumn
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
     * @return \SForce\Wsdl\DescribeColumn
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
     * @return \SForce\Wsdl\DescribeColumn
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
