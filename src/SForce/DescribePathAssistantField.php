<?php

namespace SForce\Wsdl;

class DescribePathAssistantField
{
    /**
     * @var string
     */
    protected $apiName = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var boolean
     */
    protected $readOnly = null;

    /**
     * @var boolean
     */
    protected $required = null;

    /**
     * @param string $apiName
     * @param string $label
     * @param boolean $readOnly
     * @param boolean $required
     */
    public function __construct($apiName = null, $label = null, $readOnly = null, $required = null)
    {
        $this->apiName = $apiName;
        $this->label = $label;
        $this->readOnly = $readOnly;
        $this->required = $required;
    }

    /**
     * @return string
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * @param string $apiName
     * @return \SForce\Wsdl\DescribePathAssistantField
     */
    public function setApiName($apiName)
    {
        $this->apiName = $apiName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return \SForce\Wsdl\DescribePathAssistantField
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @param boolean $readOnly
     * @return \SForce\Wsdl\DescribePathAssistantField
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param boolean $required
     * @return \SForce\Wsdl\DescribePathAssistantField
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }
}
