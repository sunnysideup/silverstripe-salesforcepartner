<?php

namespace SForce\Wsdl;

class DuplicateResult
{
    /**
     * @var boolean
     */
    protected $allowSave = null;

    /**
     * @var string
     */
    protected $duplicateRule = null;

    /**
     * @var string
     */
    protected $duplicateRuleEntityType = null;

    /**
     * @var string
     */
    protected $errorMessage = null;

    /**
     * @var MatchResult[]
     */
    protected $matchResults = null;

    /**
     * @param boolean $allowSave
     * @param string $duplicateRule
     * @param string $duplicateRuleEntityType
     */
    public function __construct($allowSave = null, $duplicateRule = null, $duplicateRuleEntityType = null)
    {
        $this->allowSave = $allowSave;
        $this->duplicateRule = $duplicateRule;
        $this->duplicateRuleEntityType = $duplicateRuleEntityType;
    }

    /**
     * @return boolean
     */
    public function getAllowSave()
    {
        return $this->allowSave;
    }

    /**
     * @param boolean $allowSave
     * @return \SForce\Wsdl\DuplicateResult
     */
    public function setAllowSave($allowSave)
    {
        $this->allowSave = $allowSave;
        return $this;
    }

    /**
     * @return string
     */
    public function getDuplicateRule()
    {
        return $this->duplicateRule;
    }

    /**
     * @param string $duplicateRule
     * @return \SForce\Wsdl\DuplicateResult
     */
    public function setDuplicateRule($duplicateRule)
    {
        $this->duplicateRule = $duplicateRule;
        return $this;
    }

    /**
     * @return string
     */
    public function getDuplicateRuleEntityType()
    {
        return $this->duplicateRuleEntityType;
    }

    /**
     * @param string $duplicateRuleEntityType
     * @return \SForce\Wsdl\DuplicateResult
     */
    public function setDuplicateRuleEntityType($duplicateRuleEntityType)
    {
        $this->duplicateRuleEntityType = $duplicateRuleEntityType;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \SForce\Wsdl\DuplicateResult
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return MatchResult[]
     */
    public function getMatchResults()
    {
        return $this->matchResults;
    }

    /**
     * @param MatchResult[] $matchResults
     * @return \SForce\Wsdl\DuplicateResult
     */
    public function setMatchResults(array $matchResults = null)
    {
        $this->matchResults = $matchResults;
        return $this;
    }
}
