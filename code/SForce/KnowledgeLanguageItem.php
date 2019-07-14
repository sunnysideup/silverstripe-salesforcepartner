<?php

namespace SForce\Wsdl;

class KnowledgeLanguageItem
{
    /**
     * @var boolean
     */
    protected $active = null;

    /**
     * @var string
     */
    protected $assigneeId = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @param boolean $active
     * @param string $name
     */
    public function __construct($active = null, $name = null)
    {
        $this->active = $active;
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     * @return \SForce\Wsdl\KnowledgeLanguageItem
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssigneeId()
    {
        return $this->assigneeId;
    }

    /**
     * @param string $assigneeId
     * @return \SForce\Wsdl\KnowledgeLanguageItem
     */
    public function setAssigneeId($assigneeId)
    {
        $this->assigneeId = $assigneeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\KnowledgeLanguageItem
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
