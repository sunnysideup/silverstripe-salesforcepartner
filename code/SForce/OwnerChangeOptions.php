<?php

namespace SForce\Wsdl;

class OwnerChangeOptions
{

    /**
     * @var OwnerChangeOption $options
     */
    protected $options = null;

    /**
     * @param OwnerChangeOption $options
     */
    public function __construct($options = null)
    {
      $this->options = $options;
    }

    /**
     * @return OwnerChangeOption
     */
    public function getOptions()
    {
      return $this->options;
    }

    /**
     * @param OwnerChangeOption $options
     * @return \SForce\Wsdl\OwnerChangeOptions
     */
    public function setOptions($options)
    {
      $this->options = $options;
      return $this;
    }

}
