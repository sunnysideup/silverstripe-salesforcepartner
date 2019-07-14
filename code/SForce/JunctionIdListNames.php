<?php

namespace SForce\Wsdl;

class JunctionIdListNames
{
    /**
     * @var string[]
     */
    protected $names = null;

    public function __construct()
    {
    }

    /**
     * @return string[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param string[] $names
     * @return \SForce\Wsdl\JunctionIdListNames
     */
    public function setNames(array $names = null)
    {
        $this->names = $names;
        return $this;
    }
}
