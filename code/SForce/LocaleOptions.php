<?php

namespace SForce\Wsdl;

class LocaleOptions
{
    /**
     * @var string
     */
    protected $language = null;

    /**
     * @var boolean
     */
    protected $localizeErrors = null;

    /**
     * @param string $language
     * @param boolean $localizeErrors
     */
    public function __construct($language = null, $localizeErrors = null)
    {
        $this->language = $language;
        $this->localizeErrors = $localizeErrors;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return \SForce\Wsdl\LocaleOptions
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLocalizeErrors()
    {
        return $this->localizeErrors;
    }

    /**
     * @param boolean $localizeErrors
     * @return \SForce\Wsdl\LocaleOptions
     */
    public function setLocalizeErrors($localizeErrors)
    {
        $this->localizeErrors = $localizeErrors;
        return $this;
    }
}
