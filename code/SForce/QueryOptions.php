<?php

namespace SForce\Wsdl;

class QueryOptions
{
    /**
     * @var int
     */
    protected $batchSize = null;

    /**
     * @param int $batchSize
     */
    public function __construct($batchSize = null)
    {
        $this->batchSize = $batchSize;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     * @return \SForce\Wsdl\QueryOptions
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;
        return $this;
    }
}
