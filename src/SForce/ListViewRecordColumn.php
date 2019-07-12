<?php

namespace SForce\Wsdl;

class ListViewRecordColumn
{

    /**
     * @var string $fieldNameOrPath
     */
    protected $fieldNameOrPath = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $fieldNameOrPath
     */
    public function __construct($fieldNameOrPath = null)
    {
      $this->fieldNameOrPath = $fieldNameOrPath;
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
     * @return \SForce\Wsdl\ListViewRecordColumn
     */
    public function setFieldNameOrPath($fieldNameOrPath)
    {
      $this->fieldNameOrPath = $fieldNameOrPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \SForce\Wsdl\ListViewRecordColumn
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
