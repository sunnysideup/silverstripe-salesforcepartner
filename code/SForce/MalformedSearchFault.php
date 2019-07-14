<?php

namespace SForce\Wsdl;

class MalformedSearchFault extends ApiQueryFault
{
    /**
     * @param ExceptionCode $exceptionCode
     * @param string $exceptionMessage
     * @param int $row
     * @param int $column
     */
    public function __construct($exceptionCode = null, $exceptionMessage = null, $row = null, $column = null)
    {
        parent::__construct($exceptionCode, $exceptionMessage, $row, $column);
    }
}
