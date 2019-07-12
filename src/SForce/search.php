<?php

namespace SForce\Wsdl;

class search
{
    /**
     * @var string
     */
    protected $searchString = null;

    /**
     * @param string $searchString
     */
    public function __construct($searchString = null)
    {
        $this->searchString = $searchString;
    }

    /**
     * @return string
     */
    public function getSearchString()
    {
        return $this->searchString;
    }

    /**
     * @param string $searchString
     * @return \SForce\Wsdl\search
     */
    public function setSearchString($searchString)
    {
        $this->searchString = $searchString;
        return $this;
    }
}
