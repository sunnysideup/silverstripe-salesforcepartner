<?php

namespace SForce\Wsdl;

class DescribeLayoutFeedView
{
    /**
     * @var DescribeLayoutFeedFilter[]
     */
    protected $feedFilters = null;

    public function __construct()
    {
    }

    /**
     * @return DescribeLayoutFeedFilter[]
     */
    public function getFeedFilters()
    {
        return $this->feedFilters;
    }

    /**
     * @param DescribeLayoutFeedFilter[] $feedFilters
     * @return \SForce\Wsdl\DescribeLayoutFeedView
     */
    public function setFeedFilters(array $feedFilters = null)
    {
        $this->feedFilters = $feedFilters;
        return $this;
    }
}
