<?php

namespace SForce\Wsdl;

class DuplicateError extends Error
{
    /**
     * @var DuplicateResult
     */
    protected $duplicateResult = null;

    /**
     * @param string $message
     * @param StatusCode $statusCode
     * @param DuplicateResult $duplicateResult
     */
    public function __construct($message = null, $statusCode = null, $duplicateResult = null)
    {
        parent::__construct($message, $statusCode);
        $this->duplicateResult = $duplicateResult;
    }

    /**
     * @return DuplicateResult
     */
    public function getDuplicateResult()
    {
        return $this->duplicateResult;
    }

    /**
     * @param DuplicateResult $duplicateResult
     * @return \SForce\Wsdl\DuplicateError
     */
    public function setDuplicateResult($duplicateResult)
    {
        $this->duplicateResult = $duplicateResult;
        return $this;
    }
}
