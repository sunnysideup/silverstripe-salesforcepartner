<?php

namespace SForce\Wsdl;

class SearchLayoutButton
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
     * @param string $apiName
     * @param string $label
     */
    public function __construct($apiName = null, $label = null)
    {
        $this->apiName = $apiName;
        $this->label = $label;
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
     * @return \SForce\Wsdl\SearchLayoutButton
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
     * @return \SForce\Wsdl\SearchLayoutButton
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }
}
