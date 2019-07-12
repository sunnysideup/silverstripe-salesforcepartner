<?php

namespace SForce\Wsdl;

class FieldDiff
{

    /**
     * @var differenceType $difference
     */
    protected $difference = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name = null)
    {
      $this->name = $name;
    }

    /**
     * @return differenceType
     */
    public function getDifference()
    {
      return $this->difference;
    }

    /**
     * @param differenceType $difference
     * @return \SForce\Wsdl\FieldDiff
     */
    public function setDifference($difference)
    {
      $this->difference = $difference;
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
     * @return \SForce\Wsdl\FieldDiff
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
