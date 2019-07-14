<?php

namespace SForce\Wsdl;

class ApiFault
{
    /**
     * @var ExceptionCode
     */
    protected $exceptionCode = null;

    /**
     * @var string
     */
    protected $exceptionMessage = null;

    /**
     * @var ExtendedErrorDetails[]
     */
    protected $extendedErrorDetails = null;

    /**
     * @param ExceptionCode $exceptionCode
     * @param string $exceptionMessage
     */
    public function __construct($exceptionCode = null, $exceptionMessage = null)
    {
        $this->exceptionCode = $exceptionCode;
        $this->exceptionMessage = $exceptionMessage;
    }

    /**
     * @return ExceptionCode
     */
    public function getExceptionCode()
    {
        return $this->exceptionCode;
    }

    /**
     * @param ExceptionCode $exceptionCode
     * @return \SForce\Wsdl\ApiFault
     */
    public function setExceptionCode($exceptionCode)
    {
        $this->exceptionCode = $exceptionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getExceptionMessage()
    {
        return $this->exceptionMessage;
    }

    /**
     * @param string $exceptionMessage
     * @return \SForce\Wsdl\ApiFault
     */
    public function setExceptionMessage($exceptionMessage)
    {
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }

    /**
     * @return ExtendedErrorDetails[]
     */
    public function getExtendedErrorDetails()
    {
        return $this->extendedErrorDetails;
    }

    /**
     * @param ExtendedErrorDetails[] $extendedErrorDetails
     * @return \SForce\Wsdl\ApiFault
     */
    public function setExtendedErrorDetails(array $extendedErrorDetails = null)
    {
        $this->extendedErrorDetails = $extendedErrorDetails;
        return $this;
    }
}
