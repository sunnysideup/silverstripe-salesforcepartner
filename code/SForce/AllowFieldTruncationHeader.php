<?php

namespace SForce\Wsdl;

class AllowFieldTruncationHeader
{
    /**
     * @var boolean
     */
    protected $allowFieldTruncation = null;

    /**
     * @param boolean $allowFieldTruncation
     */
    public function __construct($allowFieldTruncation = null)
    {
        $this->allowFieldTruncation = $allowFieldTruncation;
    }

    /**
     * @return boolean
     */
    public function getAllowFieldTruncation()
    {
        return $this->allowFieldTruncation;
    }

    /**
     * @param boolean $allowFieldTruncation
     * @return \SForce\Wsdl\AllowFieldTruncationHeader
     */
    public function setAllowFieldTruncation($allowFieldTruncation)
    {
        $this->allowFieldTruncation = $allowFieldTruncation;
        return $this;
    }
}
