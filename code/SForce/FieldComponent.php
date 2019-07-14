<?php

namespace SForce\Wsdl;

class FieldComponent extends DescribeLayoutComponent
{
    /**
     * @var Field
     */
    protected $field = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     * @param Field $field
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $field = null)
    {
        parent::__construct($displayLines, $tabOrder, $type);
        $this->field = $field;
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param Field $field
     * @return \SForce\Wsdl\FieldComponent
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }
}
