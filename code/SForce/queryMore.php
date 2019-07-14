<?php

namespace SForce\Wsdl;

class queryMore
{
    /**
     * @var QueryLocator
     */
    protected $queryLocator = null;

    /**
     * @param QueryLocator $queryLocator
     */
    public function __construct($queryLocator = null)
    {
        $this->queryLocator = $queryLocator;
    }

    /**
     * @return QueryLocator
     */
    public function getQueryLocator()
    {
        return $this->queryLocator;
    }

    /**
     * @param QueryLocator $queryLocator
     * @return \SForce\Wsdl\queryMore
     */
    public function setQueryLocator($queryLocator)
    {
        $this->queryLocator = $queryLocator;
        return $this;
    }
}
