<?php

namespace SForce\Wsdl;

class KnowledgeSettings
{
    /**
     * @var string
     */
    protected $defaultLanguage = null;

    /**
     * @var boolean
     */
    protected $knowledgeEnabled = null;

    /**
     * @var KnowledgeLanguageItem[]
     */
    protected $languages = null;

    /**
     * @param boolean $knowledgeEnabled
     */
    public function __construct($knowledgeEnabled = null)
    {
        $this->knowledgeEnabled = $knowledgeEnabled;
    }

    /**
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * @param string $defaultLanguage
     * @return \SForce\Wsdl\KnowledgeSettings
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getKnowledgeEnabled()
    {
        return $this->knowledgeEnabled;
    }

    /**
     * @param boolean $knowledgeEnabled
     * @return \SForce\Wsdl\KnowledgeSettings
     */
    public function setKnowledgeEnabled($knowledgeEnabled)
    {
        $this->knowledgeEnabled = $knowledgeEnabled;
        return $this;
    }

    /**
     * @return KnowledgeLanguageItem[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param KnowledgeLanguageItem[] $languages
     * @return \SForce\Wsdl\KnowledgeSettings
     */
    public function setLanguages(array $languages = null)
    {
        $this->languages = $languages;
        return $this;
    }
}
