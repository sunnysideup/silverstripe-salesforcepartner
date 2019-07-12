<?php

namespace SForce\Wsdl;

class describeVisualForce
{

    /**
     * @var boolean $includeAllDetails
     */
    protected $includeAllDetails = null;

    /**
     * @var string $namespacePrefix
     */
    protected $namespacePrefix = null;

    /**
     * @param boolean $includeAllDetails
     * @param string $namespacePrefix
     */
    public function __construct($includeAllDetails = null, $namespacePrefix = null)
    {
      $this->includeAllDetails = $includeAllDetails;
      $this->namespacePrefix = $namespacePrefix;
    }

    /**
     * @return boolean
     */
    public function getIncludeAllDetails()
    {
      return $this->includeAllDetails;
    }

    /**
     * @param boolean $includeAllDetails
     * @return \SForce\Wsdl\describeVisualForce
     */
    public function setIncludeAllDetails($includeAllDetails)
    {
      $this->includeAllDetails = $includeAllDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getNamespacePrefix()
    {
      return $this->namespacePrefix;
    }

    /**
     * @param string $namespacePrefix
     * @return \SForce\Wsdl\describeVisualForce
     */
    public function setNamespacePrefix($namespacePrefix)
    {
      $this->namespacePrefix = $namespacePrefix;
      return $this;
    }

}
