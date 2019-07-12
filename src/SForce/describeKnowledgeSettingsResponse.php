<?php

namespace SForce\Wsdl;

class describeKnowledgeSettingsResponse
{
    /**
     * @var KnowledgeSettings
     */
    protected $result = null;

    /**
     * @param KnowledgeSettings $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return KnowledgeSettings
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param KnowledgeSettings $result
     * @return \SForce\Wsdl\describeKnowledgeSettingsResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
