<?php

namespace SForce\Wsdl;

class DescribeQuickActionListResult
{
    /**
     * @var DescribeQuickActionListItemResult[]
     */
    protected $quickActionListItems = null;

    public function __construct()
    {
    }

    /**
     * @return DescribeQuickActionListItemResult[]
     */
    public function getQuickActionListItems()
    {
        return $this->quickActionListItems;
    }

    /**
     * @param DescribeQuickActionListItemResult[] $quickActionListItems
     * @return \SForce\Wsdl\DescribeQuickActionListResult
     */
    public function setQuickActionListItems(array $quickActionListItems = null)
    {
        $this->quickActionListItems = $quickActionListItems;
        return $this;
    }
}
