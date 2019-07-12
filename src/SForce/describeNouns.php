<?php

namespace SForce\Wsdl;

class describeNouns
{
    /**
     * @var string
     */
    protected $nouns = null;

    /**
     * @var boolean
     */
    protected $onlyRenamed = null;

    /**
     * @var boolean
     */
    protected $includeFields = null;

    /**
     * @param string $nouns
     * @param boolean $onlyRenamed
     * @param boolean $includeFields
     */
    public function __construct($nouns = null, $onlyRenamed = null, $includeFields = null)
    {
        $this->nouns = $nouns;
        $this->onlyRenamed = $onlyRenamed;
        $this->includeFields = $includeFields;
    }

    /**
     * @return string
     */
    public function getNouns()
    {
        return $this->nouns;
    }

    /**
     * @param string $nouns
     * @return \SForce\Wsdl\describeNouns
     */
    public function setNouns($nouns)
    {
        $this->nouns = $nouns;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyRenamed()
    {
        return $this->onlyRenamed;
    }

    /**
     * @param boolean $onlyRenamed
     * @return \SForce\Wsdl\describeNouns
     */
    public function setOnlyRenamed($onlyRenamed)
    {
        $this->onlyRenamed = $onlyRenamed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFields()
    {
        return $this->includeFields;
    }

    /**
     * @param boolean $includeFields
     * @return \SForce\Wsdl\describeNouns
     */
    public function setIncludeFields($includeFields)
    {
        $this->includeFields = $includeFields;
        return $this;
    }
}
