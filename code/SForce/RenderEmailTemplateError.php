<?php

namespace SForce\Wsdl;

class RenderEmailTemplateError
{

    /**
     * @var string $fieldName
     */
    protected $fieldName = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var StatusCode $statusCode
     */
    protected $statusCode = null;

    /**
     * @param string $fieldName
     * @param string $message
     * @param int $offset
     * @param StatusCode $statusCode
     */
    public function __construct($fieldName = null, $message = null, $offset = null, $statusCode = null)
    {
      $this->fieldName = $fieldName;
      $this->message = $message;
      $this->offset = $offset;
      $this->statusCode = $statusCode;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return \SForce\Wsdl\RenderEmailTemplateError
     */
    public function setFieldName($fieldName)
    {
      $this->fieldName = $fieldName;
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
     * @return \SForce\Wsdl\RenderEmailTemplateError
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \SForce\Wsdl\RenderEmailTemplateError
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
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
     * @return \SForce\Wsdl\RenderEmailTemplateError
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
