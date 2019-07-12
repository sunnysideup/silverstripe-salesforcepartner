<?php

namespace SForce\Wsdl;

class Error
{
    /**
     * @var ExtendedErrorDetails[]
     */
    protected $extendedErrorDetails = null;

    /**
     * @var string[]
     */
    protected $fields = null;

    /**
     * @var string
     */
    protected $message = null;

    /**
     * @var StatusCode
     */
    protected $statusCode = null;

    /**
     * @param string $message
     * @param StatusCode $statusCode
     */
    public function __construct($message = null, $statusCode = null)
    {
        $this->message = $message;
        $this->statusCode = $statusCode;
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
     * @return \SForce\Wsdl\Error
     */
    public function setExtendedErrorDetails(array $extendedErrorDetails = null)
    {
        $this->extendedErrorDetails = $extendedErrorDetails;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param string[] $fields
     * @return \SForce\Wsdl\Error
     */
    public function setFields(array $fields = null)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return \SForce\Wsdl\Error
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param StatusCode $statusCode
     * @return \SForce\Wsdl\Error
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
}
