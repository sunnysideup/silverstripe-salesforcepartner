<?php

namespace SForce\Wsdl;

class DescribeAppMenuResult
{
    /**
     * @var DescribeAppMenuItem[]
     */
    protected $appMenuItems = null;

    public function __construct()
    {
    }

    /**
     * @return DescribeAppMenuItem[]
     */
    public function getAppMenuItems()
    {
        return $this->appMenuItems;
    }

    /**
     * @param DescribeAppMenuItem[] $appMenuItems
     * @return \SForce\Wsdl\DescribeAppMenuResult
     */
    public function setAppMenuItems(array $appMenuItems = null)
    {
        $this->appMenuItems = $appMenuItems;
        return $this;
    }
}
