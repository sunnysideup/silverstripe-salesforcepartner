<?php

namespace SForce\Wsdl;

class SoqlSubQueryCondition extends SoqlWhereCondition
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
     * @var string
     */
    protected $subQuery = null;

    /**
     * @param string $field
     * @param soqlOperator $operator
     * @param string $subQuery
     */
    public function __construct($field = null, $operator = null, $subQuery = null)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->subQuery = $subQuery;
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
     * @return \SForce\Wsdl\SoqlSubQueryCondition
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
     * @return \SForce\Wsdl\SoqlSubQueryCondition
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubQuery()
    {
        return $this->subQuery;
    }

    /**
     * @param string $subQuery
     * @return \SForce\Wsdl\SoqlSubQueryCondition
     */
    public function setSubQuery($subQuery)
    {
        $this->subQuery = $subQuery;
        return $this;
    }
}
