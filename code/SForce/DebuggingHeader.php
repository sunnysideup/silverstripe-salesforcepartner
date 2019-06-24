<?php

namespace SForce\Wsdl;

class DebuggingHeader
{

    /**
     * @var LogInfo $categories
     */
    protected $categories = null;

    /**
     * @var DebugLevel $debugLevel
     */
    protected $debugLevel = null;

    /**
     * @param LogInfo $categories
     * @param DebugLevel $debugLevel
     */
    public function __construct($categories = null, $debugLevel = null)
    {
      $this->categories = $categories;
      $this->debugLevel = $debugLevel;
    }

    /**
     * @return LogInfo
     */
    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * @param LogInfo $categories
     * @return \SForce\Wsdl\DebuggingHeader
     */
    public function setCategories($categories)
    {
      $this->categories = $categories;
      return $this;
    }

    /**
     * @return DebugLevel
     */
    public function getDebugLevel()
    {
      return $this->debugLevel;
    }

    /**
     * @param DebugLevel $debugLevel
     * @return \SForce\Wsdl\DebuggingHeader
     */
    public function setDebugLevel($debugLevel)
    {
      $this->debugLevel = $debugLevel;
      return $this;
    }

}
