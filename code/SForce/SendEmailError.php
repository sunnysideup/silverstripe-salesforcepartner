<?php

namespace SForce\Wsdl;

class SendEmailError
{

    /**
     * @var string[] $fields
     */
    protected $fields = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var StatusCode $statusCode
     */
    protected $statusCode = null;

    /**
     * @var ID $targetObjectId
     */
    protected $targetObjectId = null;

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
     * @return string[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param string[] $fields
     * @return \SForce\Wsdl\SendEmailError
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
     * @return \SForce\Wsdl\SendEmailError
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
     * @return \SForce\Wsdl\SendEmailError
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

    /**
     * @return ID
     */
    public function getTargetObjectId()
    {
      return $this->targetObjectId;
    }

    /**
     * @param ID $targetObjectId
     * @return \SForce\Wsdl\SendEmailError
     */
    public function setTargetObjectId($targetObjectId)
    {
      $this->targetObjectId = $targetObjectId;
      return $this;
    }

}
