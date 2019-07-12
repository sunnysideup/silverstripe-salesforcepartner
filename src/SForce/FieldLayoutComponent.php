<?php

namespace SForce\Wsdl;

class FieldLayoutComponent extends DescribeLayoutComponent
{

    /**
     * @var DescribeLayoutComponent[] $components
     */
    protected $components = null;

    /**
     * @var fieldType $fieldType
     */
    protected $fieldType = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     * @param fieldType $fieldType
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $fieldType = null)
    {
      parent::__construct($displayLines, $tabOrder, $type);
      $this->fieldType = $fieldType;
    }

    /**
     * @return DescribeLayoutComponent[]
     */
    public function getComponents()
    {
      return $this->components;
    }

    /**
     * @param DescribeLayoutComponent[] $components
     * @return \SForce\Wsdl\FieldLayoutComponent
     */
    public function setComponents(array $components = null)
    {
      $this->components = $components;
      return $this;
    }

    /**
     * @return fieldType
     */
    public function getFieldType()
    {
      return $this->fieldType;
    }

    /**
     * @param fieldType $fieldType
     * @return \SForce\Wsdl\FieldLayoutComponent
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

}
