<?php

namespace SForce\Wsdl;

class DescribeThemeResult
{
    /**
     * @var DescribeThemeItem[]
     */
    protected $themeItems = null;

    public function __construct()
    {
    }

    /**
     * @return DescribeThemeItem[]
     */
    public function getThemeItems()
    {
        return $this->themeItems;
    }

    /**
     * @param DescribeThemeItem[] $themeItems
     * @return \SForce\Wsdl\DescribeThemeResult
     */
    public function setThemeItems(array $themeItems = null)
    {
        $this->themeItems = $themeItems;
        return $this;
    }
}
