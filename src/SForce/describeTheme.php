<?php

namespace SForce\Wsdl;

class describeTheme
{
    /**
     * @var string
     */
    protected $sobjectType = null;

    /**
     * @param string $sobjectType
     */
    public function __construct($sobjectType = null)
    {
        $this->sobjectType = $sobjectType;
    }

    /**
     * @return string
     */
    public function getSobjectType()
    {
        return $this->sobjectType;
    }

    /**
     * @param string $sobjectType
     * @return \SForce\Wsdl\describeTheme
     */
    public function setSobjectType($sobjectType)
    {
        $this->sobjectType = $sobjectType;
        return $this;
    }
}
