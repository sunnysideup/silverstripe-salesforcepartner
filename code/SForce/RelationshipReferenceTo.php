<?php

namespace SForce\Wsdl;

class RelationshipReferenceTo
{
    /**
     * @var string[]
     */
    protected $referenceTo = null;

    public function __construct()
    {
    }

    /**
     * @return string[]
     */
    public function getReferenceTo()
    {
        return $this->referenceTo;
    }

    /**
     * @param string[] $referenceTo
     * @return \SForce\Wsdl\RelationshipReferenceTo
     */
    public function setReferenceTo(array $referenceTo = null)
    {
        $this->referenceTo = $referenceTo;
        return $this;
    }
}
