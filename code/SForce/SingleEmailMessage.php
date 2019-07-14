<?php

namespace SForce\Wsdl;

class SingleEmailMessage extends Email
{
    /**
     * @var string[]
     */
    protected $bccAddresses = null;

    /**
     * @var string[]
     */
    protected $ccAddresses = null;

    /**
     * @var string
     */
    protected $charset = null;

    /**
     * @var ID[]
     */
    protected $documentAttachments = null;

    /**
     * @var ID[]
     */
    protected $entityAttachments = null;

    /**
     * @var EmailFileAttachment[]
     */
    protected $fileAttachments = null;

    /**
     * @var string
     */
    protected $htmlBody = null;

    /**
     * @var string
     */
    protected $inReplyTo = null;

    /**
     * @var SendEmailOptOutPolicy
     */
    protected $optOutPolicy = null;

    /**
     * @var ID
     */
    protected $orgWideEmailAddressId = null;

    /**
     * @var string
     */
    protected $plainTextBody = null;

    /**
     * @var string
     */
    protected $references = null;

    /**
     * @var ID
     */
    protected $targetObjectId = null;

    /**
     * @var ID
     */
    protected $templateId = null;

    /**
     * @var string
     */
    protected $templateName = null;

    /**
     * @var string[]
     */
    protected $toAddresses = null;

    /**
     * @var boolean
     */
    protected $treatBodiesAsTemplate = null;

    /**
     * @var boolean
     */
    protected $treatTargetObjectAsRecipient = null;

    /**
     * @var ID
     */
    protected $whatId = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string[]
     */
    public function getBccAddresses()
    {
        return $this->bccAddresses;
    }

    /**
     * @param string[] $bccAddresses
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setBccAddresses(array $bccAddresses = null)
    {
        $this->bccAddresses = $bccAddresses;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCcAddresses()
    {
        return $this->ccAddresses;
    }

    /**
     * @param string[] $ccAddresses
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setCcAddresses(array $ccAddresses = null)
    {
        $this->ccAddresses = $ccAddresses;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getDocumentAttachments()
    {
        return $this->documentAttachments;
    }

    /**
     * @param ID[] $documentAttachments
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setDocumentAttachments(array $documentAttachments = null)
    {
        $this->documentAttachments = $documentAttachments;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getEntityAttachments()
    {
        return $this->entityAttachments;
    }

    /**
     * @param ID[] $entityAttachments
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setEntityAttachments(array $entityAttachments = null)
    {
        $this->entityAttachments = $entityAttachments;
        return $this;
    }

    /**
     * @return EmailFileAttachment[]
     */
    public function getFileAttachments()
    {
        return $this->fileAttachments;
    }

    /**
     * @param EmailFileAttachment[] $fileAttachments
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setFileAttachments(array $fileAttachments = null)
    {
        $this->fileAttachments = $fileAttachments;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->htmlBody;
    }

    /**
     * @param string $htmlBody
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setHtmlBody($htmlBody)
    {
        $this->htmlBody = $htmlBody;
        return $this;
    }

    /**
     * @return string
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     * @param string $inReplyTo
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;
        return $this;
    }

    /**
     * @return SendEmailOptOutPolicy
     */
    public function getOptOutPolicy()
    {
        return $this->optOutPolicy;
    }

    /**
     * @param SendEmailOptOutPolicy $optOutPolicy
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setOptOutPolicy($optOutPolicy)
    {
        $this->optOutPolicy = $optOutPolicy;
        return $this;
    }

    /**
     * @return ID
     */
    public function getOrgWideEmailAddressId()
    {
        return $this->orgWideEmailAddressId;
    }

    /**
     * @param ID $orgWideEmailAddressId
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setOrgWideEmailAddressId($orgWideEmailAddressId)
    {
        $this->orgWideEmailAddressId = $orgWideEmailAddressId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlainTextBody()
    {
        return $this->plainTextBody;
    }

    /**
     * @param string $plainTextBody
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setPlainTextBody($plainTextBody)
    {
        $this->plainTextBody = $plainTextBody;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param string $references
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setReferences($references)
    {
        $this->references = $references;
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
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setTargetObjectId($targetObjectId)
    {
        $this->targetObjectId = $targetObjectId;
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
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getToAddresses()
    {
        return $this->toAddresses;
    }

    /**
     * @param string[] $toAddresses
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setToAddresses(array $toAddresses = null)
    {
        $this->toAddresses = $toAddresses;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTreatBodiesAsTemplate()
    {
        return $this->treatBodiesAsTemplate;
    }

    /**
     * @param boolean $treatBodiesAsTemplate
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setTreatBodiesAsTemplate($treatBodiesAsTemplate)
    {
        $this->treatBodiesAsTemplate = $treatBodiesAsTemplate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTreatTargetObjectAsRecipient()
    {
        return $this->treatTargetObjectAsRecipient;
    }

    /**
     * @param boolean $treatTargetObjectAsRecipient
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setTreatTargetObjectAsRecipient($treatTargetObjectAsRecipient)
    {
        $this->treatTargetObjectAsRecipient = $treatTargetObjectAsRecipient;
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
     * @return \SForce\Wsdl\SingleEmailMessage
     */
    public function setWhatId($whatId)
    {
        $this->whatId = $whatId;
        return $this;
    }
}
