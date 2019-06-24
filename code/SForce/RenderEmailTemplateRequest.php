<?php

namespace SForce\Wsdl;

class RenderEmailTemplateRequest
{

    /**
     * @var boolean $escapeHtmlInMergeFields
     */
    protected $escapeHtmlInMergeFields = null;

    /**
     * @var string[] $templateBodies
     */
    protected $templateBodies = null;

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
     * @return boolean
     */
    public function getEscapeHtmlInMergeFields()
    {
      return $this->escapeHtmlInMergeFields;
    }

    /**
     * @param boolean $escapeHtmlInMergeFields
     * @return \SForce\Wsdl\RenderEmailTemplateRequest
     */
    public function setEscapeHtmlInMergeFields($escapeHtmlInMergeFields)
    {
      $this->escapeHtmlInMergeFields = $escapeHtmlInMergeFields;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getTemplateBodies()
    {
      return $this->templateBodies;
    }

    /**
     * @param string[] $templateBodies
     * @return \SForce\Wsdl\RenderEmailTemplateRequest
     */
    public function setTemplateBodies(array $templateBodies = null)
    {
      $this->templateBodies = $templateBodies;
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
     * @return \SForce\Wsdl\RenderEmailTemplateRequest
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
     * @return \SForce\Wsdl\RenderEmailTemplateRequest
     */
    public function setWhoId($whoId)
    {
      $this->whoId = $whoId;
      return $this;
    }

}
