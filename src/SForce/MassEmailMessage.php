<?php

namespace SForce\Wsdl;

class MassEmailMessage extends Email
{
    /**
     * @var string
     */
    protected $description = null;

    /**
     * @var ID[]
     */
    protected $targetObjectIds = null;

    /**
     * @var ID
     */
    protected $templateId = null;

    /**
     * @var ID[]
     */
    protected $whatIds = null;

    /**
     * @param ID $templateId
     */
    public function __construct($templateId = null)
    {
        parent::__construct();
        $this->templateId = $templateId;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return \SForce\Wsdl\MassEmailMessage
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getTargetObjectIds()
    {
        return $this->targetObjectIds;
    }

    /**
     * @param ID[] $targetObjectIds
     * @return \SForce\Wsdl\MassEmailMessage
     */
    public function setTargetObjectIds(array $targetObjectIds = null)
    {
        $this->targetObjectIds = $targetObjectIds;
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
     * @return \SForce\Wsdl\MassEmailMessage
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getWhatIds()
    {
        return $this->whatIds;
    }

    /**
     * @param ID[] $whatIds
     * @return \SForce\Wsdl\MassEmailMessage
     */
    public function setWhatIds(array $whatIds = null)
    {
        $this->whatIds = $whatIds;
        return $this;
    }
}
