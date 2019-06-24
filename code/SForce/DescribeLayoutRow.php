<?php

namespace SForce\Wsdl;

class DescribeLayoutRow
{

    /**
     * @var DescribeLayoutItem[] $layoutItems
     */
    protected $layoutItems = null;

    /**
     * @var int $numItems
     */
    protected $numItems = null;

    /**
     * @param DescribeLayoutItem[] $layoutItems
     * @param int $numItems
     */
    public function __construct(array $layoutItems = null, $numItems = null)
    {
      $this->layoutItems = $layoutItems;
      $this->numItems = $numItems;
    }

    /**
     * @return DescribeLayoutItem[]
     */
    public function getLayoutItems()
    {
      return $this->layoutItems;
    }

    /**
     * @param DescribeLayoutItem[] $layoutItems
     * @return \SForce\Wsdl\DescribeLayoutRow
     */
    public function setLayoutItems(array $layoutItems)
    {
      $this->layoutItems = $layoutItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumItems()
    {
      return $this->numItems;
    }

    /**
     * @param int $numItems
     * @return \SForce\Wsdl\DescribeLayoutRow
     */
    public function setNumItems($numItems)
    {
      $this->numItems = $numItems;
      return $this;
    }

}
