<?php

namespace SForce\Wsdl;

class OwnerChangeOption
{

    /**
     * @var OwnerChangeOptionType $type
     */
    protected $type = null;

    /**
     * @var boolean $execute
     */
    protected $execute = null;

    /**
     * @param OwnerChangeOptionType $type
     * @param boolean $execute
     */
    public function __construct($type = null, $execute = null)
    {
      $this->type = $type;
      $this->execute = $execute;
    }

    /**
     * @return OwnerChangeOptionType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param OwnerChangeOptionType $type
     * @return \SForce\Wsdl\OwnerChangeOption
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExecute()
    {
      return $this->execute;
    }

    /**
     * @param boolean $execute
     * @return \SForce\Wsdl\OwnerChangeOption
     */
    public function setExecute($execute)
    {
      $this->execute = $execute;
      return $this;
    }

}
