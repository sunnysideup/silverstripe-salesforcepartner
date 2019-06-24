<?php

namespace SForce\Wsdl;

class SoqlNotCondition extends SoqlWhereCondition
{

    /**
     * @var SoqlWhereCondition $condition
     */
    protected $condition = null;

    /**
     * @param SoqlWhereCondition $condition
     */
    public function __construct($condition = null)
    {
      $this->condition = $condition;
    }

    /**
     * @return SoqlWhereCondition
     */
    public function getCondition()
    {
      return $this->condition;
    }

    /**
     * @param SoqlWhereCondition $condition
     * @return \SForce\Wsdl\SoqlNotCondition
     */
    public function setCondition($condition)
    {
      $this->condition = $condition;
      return $this;
    }

}
