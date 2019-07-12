<?php

namespace SForce\Wsdl;

class PackageVersion
{
    /**
     * @var int
     */
    protected $majorNumber = null;

    /**
     * @var int
     */
    protected $minorNumber = null;

    /**
     * @var string
     */
    protected $namespace = null;

    /**
     * @param int $majorNumber
     * @param int $minorNumber
     * @param string $namespace
     */
    public function __construct($majorNumber = null, $minorNumber = null, $namespace = null)
    {
        $this->majorNumber = $majorNumber;
        $this->minorNumber = $minorNumber;
        $this->namespace = $namespace;
    }

    /**
     * @return int
     */
    public function getMajorNumber()
    {
        return $this->majorNumber;
    }

    /**
     * @param int $majorNumber
     * @return \SForce\Wsdl\PackageVersion
     */
    public function setMajorNumber($majorNumber)
    {
        $this->majorNumber = $majorNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinorNumber()
    {
        return $this->minorNumber;
    }

    /**
     * @param int $minorNumber
     * @return \SForce\Wsdl\PackageVersion
     */
    public function setMinorNumber($minorNumber)
    {
        $this->minorNumber = $minorNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     * @return \SForce\Wsdl\PackageVersion
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }
}
