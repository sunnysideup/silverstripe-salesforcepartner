<?php

namespace SForce\Wsdl;

class NameCaseValue
{

    /**
     * @var Article $article
     */
    protected $article = null;

    /**
     * @var CaseType $caseType
     */
    protected $caseType = null;

    /**
     * @var GrammaticalNumber $number
     */
    protected $number = null;

    /**
     * @var Possessive $possessive
     */
    protected $possessive = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Article
     */
    public function getArticle()
    {
      return $this->article;
    }

    /**
     * @param Article $article
     * @return \SForce\Wsdl\NameCaseValue
     */
    public function setArticle($article)
    {
      $this->article = $article;
      return $this;
    }

    /**
     * @return CaseType
     */
    public function getCaseType()
    {
      return $this->caseType;
    }

    /**
     * @param CaseType $caseType
     * @return \SForce\Wsdl\NameCaseValue
     */
    public function setCaseType($caseType)
    {
      $this->caseType = $caseType;
      return $this;
    }

    /**
     * @return GrammaticalNumber
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param GrammaticalNumber $number
     * @return \SForce\Wsdl\NameCaseValue
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return Possessive
     */
    public function getPossessive()
    {
      return $this->possessive;
    }

    /**
     * @param Possessive $possessive
     * @return \SForce\Wsdl\NameCaseValue
     */
    public function setPossessive($possessive)
    {
      $this->possessive = $possessive;
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
     * @return \SForce\Wsdl\NameCaseValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
