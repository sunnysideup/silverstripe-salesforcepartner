<?php

namespace SForce\Wsdl;

class SearchRecordMetadata
{
    /**
     * @var boolean
     */
    protected $searchPromoted = null;

    /**
     * @var boolean
     */
    protected $spellCorrected = null;

    /**
     * @param boolean $searchPromoted
     * @param boolean $spellCorrected
     */
    public function __construct($searchPromoted = null, $spellCorrected = null)
    {
        $this->searchPromoted = $searchPromoted;
        $this->spellCorrected = $spellCorrected;
    }

    /**
     * @return boolean
     */
    public function getSearchPromoted()
    {
        return $this->searchPromoted;
    }

    /**
     * @param boolean $searchPromoted
     * @return \SForce\Wsdl\SearchRecordMetadata
     */
    public function setSearchPromoted($searchPromoted)
    {
        $this->searchPromoted = $searchPromoted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSpellCorrected()
    {
        return $this->spellCorrected;
    }

    /**
     * @param boolean $spellCorrected
     * @return \SForce\Wsdl\SearchRecordMetadata
     */
    public function setSpellCorrected($spellCorrected)
    {
        $this->spellCorrected = $spellCorrected;
        return $this;
    }
}
