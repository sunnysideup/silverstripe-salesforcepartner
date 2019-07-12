<?php

namespace SForce\Wsdl;

class AssignmentRuleHeader
{

    /**
     * @var ID $assignmentRuleId
     */
    protected $assignmentRuleId = null;

    /**
     * @var boolean $useDefaultRule
     */
    protected $useDefaultRule = null;

    /**
     * @param ID $assignmentRuleId
     * @param boolean $useDefaultRule
     */
    public function __construct($assignmentRuleId = null, $useDefaultRule = null)
    {
      $this->assignmentRuleId = $assignmentRuleId;
      $this->useDefaultRule = $useDefaultRule;
    }

    /**
     * @return ID
     */
    public function getAssignmentRuleId()
    {
      return $this->assignmentRuleId;
    }

    /**
     * @param ID $assignmentRuleId
     * @return \SForce\Wsdl\AssignmentRuleHeader
     */
    public function setAssignmentRuleId($assignmentRuleId)
    {
      $this->assignmentRuleId = $assignmentRuleId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDefaultRule()
    {
      return $this->useDefaultRule;
    }

    /**
     * @param boolean $useDefaultRule
     * @return \SForce\Wsdl\AssignmentRuleHeader
     */
    public function setUseDefaultRule($useDefaultRule)
    {
      $this->useDefaultRule = $useDefaultRule;
      return $this;
    }

}
