<?php

namespace SForce\Wsdl;

class MruHeader
{
    /**
     * @var boolean
     */
    protected $updateMru = null;

    /**
     * @param boolean $updateMru
     */
    public function __construct($updateMru = null)
    {
        $this->updateMru = $updateMru;
    }

    /**
     * @return boolean
     */
    public function getUpdateMru()
    {
        return $this->updateMru;
    }

    /**
     * @param boolean $updateMru
     * @return \SForce\Wsdl\MruHeader
     */
    public function setUpdateMru($updateMru)
    {
        $this->updateMru = $updateMru;
        return $this;
    }
}
