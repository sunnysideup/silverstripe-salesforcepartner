<?php

namespace SForce\Wsdl;

class Email
{

    /**
     * @var boolean $bccSender
     */
    protected $bccSender = null;

    /**
     * @var EmailPriority $emailPriority
     */
    protected $emailPriority = null;

    /**
     * @var string $replyTo
     */
    protected $replyTo = null;

    /**
     * @var boolean $saveAsActivity
     */
    protected $saveAsActivity = null;

    /**
     * @var string $senderDisplayName
     */
    protected $senderDisplayName = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var boolean $useSignature
     */
    protected $useSignature = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getBccSender()
    {
      return $this->bccSender;
    }

    /**
     * @param boolean $bccSender
     * @return \SForce\Wsdl\Email
     */
    public function setBccSender($bccSender)
    {
      $this->bccSender = $bccSender;
      return $this;
    }

    /**
     * @return EmailPriority
     */
    public function getEmailPriority()
    {
      return $this->emailPriority;
    }

    /**
     * @param EmailPriority $emailPriority
     * @return \SForce\Wsdl\Email
     */
    public function setEmailPriority($emailPriority)
    {
      $this->emailPriority = $emailPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getReplyTo()
    {
      return $this->replyTo;
    }

    /**
     * @param string $replyTo
     * @return \SForce\Wsdl\Email
     */
    public function setReplyTo($replyTo)
    {
      $this->replyTo = $replyTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaveAsActivity()
    {
      return $this->saveAsActivity;
    }

    /**
     * @param boolean $saveAsActivity
     * @return \SForce\Wsdl\Email
     */
    public function setSaveAsActivity($saveAsActivity)
    {
      $this->saveAsActivity = $saveAsActivity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderDisplayName()
    {
      return $this->senderDisplayName;
    }

    /**
     * @param string $senderDisplayName
     * @return \SForce\Wsdl\Email
     */
    public function setSenderDisplayName($senderDisplayName)
    {
      $this->senderDisplayName = $senderDisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \SForce\Wsdl\Email
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseSignature()
    {
      return $this->useSignature;
    }

    /**
     * @param boolean $useSignature
     * @return \SForce\Wsdl\Email
     */
    public function setUseSignature($useSignature)
    {
      $this->useSignature = $useSignature;
      return $this;
    }

}
