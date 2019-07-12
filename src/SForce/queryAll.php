<?php

namespace SForce\Wsdl;

class queryAll
{
    /**
     * @var string
     */
    protected $queryString = null;

    /**
     * @param string $queryString
     */
    public function __construct($queryString = null)
    {
        $this->queryString = $queryString;
    }

    /**
     * @return string
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @param string $queryString
     * @return \SForce\Wsdl\queryAll
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
        return $this;
    }
}
