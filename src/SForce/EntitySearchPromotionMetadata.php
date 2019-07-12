<?php

namespace SForce\Wsdl;

class EntitySearchPromotionMetadata
{
    /**
     * @var int
     */
    protected $promotedResultCount = null;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getPromotedResultCount()
    {
        return $this->promotedResultCount;
    }

    /**
     * @param int $promotedResultCount
     * @return \SForce\Wsdl\EntitySearchPromotionMetadata
     */
    public function setPromotedResultCount($promotedResultCount)
    {
        $this->promotedResultCount = $promotedResultCount;
        return $this;
    }
}
