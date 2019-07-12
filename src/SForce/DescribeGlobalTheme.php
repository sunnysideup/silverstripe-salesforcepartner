<?php

namespace SForce\Wsdl;

class DescribeGlobalTheme
{

    /**
     * @var DescribeGlobalResult $global
     */
    protected $global = null;

    /**
     * @var DescribeThemeResult $theme
     */
    protected $theme = null;

    /**
     * @param DescribeGlobalResult $global
     * @param DescribeThemeResult $theme
     */
    public function __construct($global = null, $theme = null)
    {
      $this->global = $global;
      $this->theme = $theme;
    }

    /**
     * @return DescribeGlobalResult
     */
    public function getGlobal()
    {
      return $this->global;
    }

    /**
     * @param DescribeGlobalResult $global
     * @return \SForce\Wsdl\DescribeGlobalTheme
     */
    public function setGlobal($global)
    {
      $this->global = $global;
      return $this;
    }

    /**
     * @return DescribeThemeResult
     */
    public function getTheme()
    {
      return $this->theme;
    }

    /**
     * @param DescribeThemeResult $theme
     * @return \SForce\Wsdl\DescribeGlobalTheme
     */
    public function setTheme($theme)
    {
      $this->theme = $theme;
      return $this;
    }

}
