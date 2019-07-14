<?php

namespace SForce\Wsdl;

class InvalidIdFault extends ApiFault
{
    /**
     * @param ExceptionCode $exceptionCode
     * @param string $exceptionMessage
     */
    public function __construct($exceptionCode = null, $exceptionMessage = null)
    {
        parent::__construct($exceptionCode, $exceptionMessage);
    }
}
