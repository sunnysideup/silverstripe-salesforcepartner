<?php

namespace SForce\Wsdl;

class RenderStoredEmailTemplateRequest
{

    /**
     * @var AttachmentRetrievalOption $attachmentRetrievalOption
     */
    protected $attachmentRetrievalOption = null;

    /**
     * @var ID $templateId
     */
    protected $templateId = null;

    /**
     * @var boolean $updateTemplateUsage
     */
    protected $updateTemplateUsage = null;

    /**
     * @var ID $whatId
     */
    protected $whatId = null;

    /**
     * @var ID $whoId
     */
    protected $whoId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AttachmentRetrievalOption
     */
    public function getAttachmentRetrievalOption()
    {
      return $this->attachmentRetrievalOption;
    }

    /**
     * @param AttachmentRetrievalOption $attachmentRetrievalOption
     * @return \SForce\Wsdl\RenderStoredEmailTemplateRequest
     */
    public function setAttachmentRetrievalOption($attachmentRetrievalOption)
    {
      $this->attachmentRetrievalOption = $attachmentRetrievalOption;
      return $this;
    }

    /**
     * @return ID
     */
    public function getTemplateId()
    {
      return $this->templateId;
    }

    /**
     * @param ID $templateId
     * @return \SForce\Wsdl\RenderStoredEmailTemplateRequest
     */
    public function setTemplateId($templateId)
    {
      $this->templateId = $templateId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateTemplateUsage()
    {
      return $this->updateTemplateUsage;
    }

    /**
     * @param boolean $updateTemplateUsage
     * @return \SForce\Wsdl\RenderStoredEmailTemplateRequest
     */
    public function setUpdateTemplateUsage($updateTemplateUsage)
    {
      $this->updateTemplateUsage = $updateTemplateUsage;
      return $this;
    }

    /**
     * @return ID
     */
    public function getWhatId()
    {
      return $this->whatId;
    }

    /**
     * @param ID $whatId
     * @return \SForce\Wsdl\RenderStoredEmailTemplateRequest
     */
    public function setWhatId($whatId)
    {
      $this->whatId = $whatId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getWhoId()
    {
      return $this->whoId;
    }

    /**
     * @param ID $whoId
     * @return \SForce\Wsdl\RenderStoredEmailTemplateRequest
     */
    public function setWhoId($whoId)
    {
      $this->whoId = $whoId;
      return $this;
    }

}
