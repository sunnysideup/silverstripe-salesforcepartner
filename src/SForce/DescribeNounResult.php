<?php

namespace SForce\Wsdl;

class DescribeNounResult
{

    /**
     * @var NameCaseValue[] $caseValues
     */
    protected $caseValues = null;

    /**
     * @var string $developerName
     */
    protected $developerName = null;

    /**
     * @var Gender $gender
     */
    protected $gender = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $pluralAlias
     */
    protected $pluralAlias = null;

    /**
     * @var StartsWith $startsWith
     */
    protected $startsWith = null;

    /**
     * @param string $developerName
     * @param string $name
     */
    public function __construct($developerName = null, $name = null)
    {
      $this->developerName = $developerName;
      $this->name = $name;
    }

    /**
     * @return NameCaseValue[]
     */
    public function getCaseValues()
    {
      return $this->caseValues;
    }

    /**
     * @param NameCaseValue[] $caseValues
     * @return \SForce\Wsdl\DescribeNounResult
     */
    public function setCaseValues(array $caseValues = null)
    {
      $this->caseValues = $caseValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeveloperName()
    {
      return $this->developerName;
    }

    /**
     * @param string $developerName
     * @return \SForce\Wsdl\DescribeNounResult
     */
    public function setDeveloperName($developerName)
    {
      $this->developerName = $developerName;
      return $this;
    }

    /**
     * @return Gender
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param Gender $gender
     * @return \SForce\Wsdl\DescribeNounResult
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\DescribeNounResult
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPluralAlias()
    {
      return $this->pluralAlias;
    }

    /**
     * @param string $pluralAlias
     * @return \SForce\Wsdl\DescribeNounResult
     */
    public function setPluralAlias($pluralAlias)
    {
      $this->pluralAlias = $pluralAlias;
      return $this;
    }

    /**
     * @return StartsWith
     */
    public function getStartsWith()
    {
      return $this->startsWith;
    }

    /**
     * @param StartsWith $startsWith
     * @return \SForce\Wsdl\DescribeNounResult
     */
    public function setStartsWith($startsWith)
    {
      $this->startsWith = $startsWith;
      return $this;
    }

}
