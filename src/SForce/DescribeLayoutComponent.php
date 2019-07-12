<?php

namespace SForce\Wsdl;

class DescribeLayoutComponent
{

    /**
     * @var int $displayLines
     */
    protected $displayLines = null;

    /**
     * @var int $tabOrder
     */
    protected $tabOrder = null;

    /**
     * @var layoutComponentType $type
     */
    protected $type = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null)
    {
      $this->displayLines = $displayLines;
      $this->tabOrder = $tabOrder;
      $this->type = $type;
    }

    /**
     * @return int
     */
    public function getDisplayLines()
    {
      return $this->displayLines;
    }

    /**
     * @param int $displayLines
     * @return \SForce\Wsdl\DescribeLayoutComponent
     */
    public function setDisplayLines($displayLines)
    {
      $this->displayLines = $displayLines;
      return $this;
    }

    /**
     * @return int
     */
    public function getTabOrder()
    {
      return $this->tabOrder;
    }

    /**
     * @param int $tabOrder
     * @return \SForce\Wsdl\DescribeLayoutComponent
     */
    public function setTabOrder($tabOrder)
    {
      $this->tabOrder = $tabOrder;
      return $this;
    }

    /**
     * @return layoutComponentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param layoutComponentType $type
     * @return \SForce\Wsdl\DescribeLayoutComponent
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \SForce\Wsdl\DescribeLayoutComponent
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
