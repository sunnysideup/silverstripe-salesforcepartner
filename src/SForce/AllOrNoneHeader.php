<?php

namespace SForce\Wsdl;

class AllOrNoneHeader
{

    /**
     * @var boolean $allOrNone
     */
    protected $allOrNone = null;

    /**
     * @param boolean $allOrNone
     */
    public function __construct($allOrNone = null)
    {
      $this->allOrNone = $allOrNone;
    }

    /**
     * @return boolean
     */
    public function getAllOrNone()
    {
      return $this->allOrNone;
    }

    /**
     * @param boolean $allOrNone
     * @return \SForce\Wsdl\AllOrNoneHeader
     */
    public function setAllOrNone($allOrNone)
    {
      $this->allOrNone = $allOrNone;
      return $this;
    }

}
