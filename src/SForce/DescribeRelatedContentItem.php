<?php

namespace SForce\Wsdl;

class DescribeRelatedContentItem
{

    /**
     * @var DescribeLayoutItem $describeLayoutItem
     */
    protected $describeLayoutItem = null;

    /**
     * @param DescribeLayoutItem $describeLayoutItem
     */
    public function __construct($describeLayoutItem = null)
    {
      $this->describeLayoutItem = $describeLayoutItem;
    }

    /**
     * @return DescribeLayoutItem
     */
    public function getDescribeLayoutItem()
    {
      return $this->describeLayoutItem;
    }

    /**
     * @param DescribeLayoutItem $describeLayoutItem
     * @return \SForce\Wsdl\DescribeRelatedContentItem
     */
    public function setDescribeLayoutItem($describeLayoutItem)
    {
      $this->describeLayoutItem = $describeLayoutItem;
      return $this;
    }

}
