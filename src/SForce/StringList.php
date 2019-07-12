<?php

namespace SForce\Wsdl;

class StringList
{
    /**
     * @var string[]
     */
    protected $values = null;

    public function __construct()
    {
    }

    /**
     * @return string[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param string[] $values
     * @return \SForce\Wsdl\StringList
     */
    public function setValues(array $values = null)
    {
        $this->values = $values;
        return $this;
    }
}
