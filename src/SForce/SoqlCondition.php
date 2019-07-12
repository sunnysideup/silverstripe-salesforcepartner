<?php

namespace SForce\Wsdl;

class SoqlCondition extends SoqlWhereCondition
{
    /**
     * @var string
     */
    protected $field = null;

    /**
     * @var soqlOperator
     */
    protected $operator = null;

    /**
     * @var string[]
     */
    protected $values = null;

    /**
     * @param string $field
     * @param soqlOperator $operator
     * @param string[] $values
     */
    public function __construct($field = null, $operator = null, array $values = null)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
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
     * @return \SForce\Wsdl\SoqlCondition
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return soqlOperator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param soqlOperator $operator
     * @return \SForce\Wsdl\SoqlCondition
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param string[] $values
     * @return \SForce\Wsdl\SoqlCondition
     */
    public function setValues(array $values)
    {
        $this->values = $values;
        return $this;
    }
}
