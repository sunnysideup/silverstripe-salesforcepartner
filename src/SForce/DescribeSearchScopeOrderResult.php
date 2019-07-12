<?php

namespace SForce\Wsdl;

class DescribeSearchScopeOrderResult
{

    /**
     * @var string $keyPrefix
     */
    protected $keyPrefix = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $keyPrefix
     * @param string $name
     */
    public function __construct($keyPrefix = null, $name = null)
    {
      $this->keyPrefix = $keyPrefix;
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getKeyPrefix()
    {
      return $this->keyPrefix;
    }

    /**
     * @param string $keyPrefix
     * @return \SForce\Wsdl\DescribeSearchScopeOrderResult
     */
    public function setKeyPrefix($keyPrefix)
    {
      $this->keyPrefix = $keyPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\DescribeSearchScopeOrderResult
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
