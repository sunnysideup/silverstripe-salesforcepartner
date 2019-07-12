<?php

namespace SForce\Wsdl;

class SoqlConditionGroup extends SoqlWhereCondition
{

    /**
     * @var SoqlWhereCondition[] $conditions
     */
    protected $conditions = null;

    /**
     * @var soqlConjunction $conjunction
     */
    protected $conjunction = null;

    /**
     * @param soqlConjunction $conjunction
     */
    public function __construct($conjunction = null)
    {
      $this->conjunction = $conjunction;
    }

    /**
     * @return SoqlWhereCondition[]
     */
    public function getConditions()
    {
      return $this->conditions;
    }

    /**
     * @param SoqlWhereCondition[] $conditions
     * @return \SForce\Wsdl\SoqlConditionGroup
     */
    public function setConditions(array $conditions = null)
    {
      $this->conditions = $conditions;
      return $this;
    }

    /**
     * @return soqlConjunction
     */
    public function getConjunction()
    {
      return $this->conjunction;
    }

    /**
     * @param soqlConjunction $conjunction
     * @return \SForce\Wsdl\SoqlConditionGroup
     */
    public function setConjunction($conjunction)
    {
      $this->conjunction = $conjunction;
      return $this;
    }

}
