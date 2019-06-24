<?php

namespace SForce\Wsdl;

class EmailFileAttachment
{

    /**
     * @var base64Binary $body
     */
    protected $body = null;

    /**
     * @var string $contentType
     */
    protected $contentType = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var boolean $inline
     */
    protected $inline = null;

    /**
     * @param string $fileName
     */
    public function __construct($fileName = null)
    {
      $this->fileName = $fileName;
    }

    /**
     * @return base64Binary
     */
    public function getBody()
    {
      return $this->body;
    }

    /**
     * @param base64Binary $body
     * @return \SForce\Wsdl\EmailFileAttachment
     */
    public function setBody($body)
    {
      $this->body = $body;
      return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return \SForce\Wsdl\EmailFileAttachment
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \SForce\Wsdl\EmailFileAttachment
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \SForce\Wsdl\EmailFileAttachment
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInline()
    {
      return $this->inline;
    }

    /**
     * @param boolean $inline
     * @return \SForce\Wsdl\EmailFileAttachment
     */
    public function setInline($inline)
    {
      $this->inline = $inline;
      return $this;
    }

}
