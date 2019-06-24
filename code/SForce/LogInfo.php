<?php

namespace SForce\Wsdl;

class LogInfo
{

    /**
     * @var LogCategory $category
     */
    protected $category = null;

    /**
     * @var LogCategoryLevel $level
     */
    protected $level = null;

    /**
     * @param LogCategory $category
     * @param LogCategoryLevel $level
     */
    public function __construct($category = null, $level = null)
    {
      $this->category = $category;
      $this->level = $level;
    }

    /**
     * @return LogCategory
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param LogCategory $category
     * @return \SForce\Wsdl\LogInfo
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return LogCategoryLevel
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param LogCategoryLevel $level
     * @return \SForce\Wsdl\LogInfo
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

}
