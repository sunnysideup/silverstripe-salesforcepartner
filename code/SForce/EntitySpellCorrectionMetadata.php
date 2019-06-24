<?php

namespace SForce\Wsdl;

class EntitySpellCorrectionMetadata
{

    /**
     * @var string $correctedQuery
     */
    protected $correctedQuery = null;

    /**
     * @var boolean $hasNonCorrectedResults
     */
    protected $hasNonCorrectedResults = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCorrectedQuery()
    {
      return $this->correctedQuery;
    }

    /**
     * @param string $correctedQuery
     * @return \SForce\Wsdl\EntitySpellCorrectionMetadata
     */
    public function setCorrectedQuery($correctedQuery)
    {
      $this->correctedQuery = $correctedQuery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasNonCorrectedResults()
    {
      return $this->hasNonCorrectedResults;
    }

    /**
     * @param boolean $hasNonCorrectedResults
     * @return \SForce\Wsdl\EntitySpellCorrectionMetadata
     */
    public function setHasNonCorrectedResults($hasNonCorrectedResults)
    {
      $this->hasNonCorrectedResults = $hasNonCorrectedResults;
      return $this;
    }

}
