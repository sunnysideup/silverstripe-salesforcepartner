<?php

namespace SForce\Wsdl;

class PackageVersionHeader
{

    /**
     * @var PackageVersion $packageVersions
     */
    protected $packageVersions = null;

    /**
     * @param PackageVersion $packageVersions
     */
    public function __construct($packageVersions = null)
    {
      $this->packageVersions = $packageVersions;
    }

    /**
     * @return PackageVersion
     */
    public function getPackageVersions()
    {
      return $this->packageVersions;
    }

    /**
     * @param PackageVersion $packageVersions
     * @return \SForce\Wsdl\PackageVersionHeader
     */
    public function setPackageVersions($packageVersions)
    {
      $this->packageVersions = $packageVersions;
      return $this;
    }

}
