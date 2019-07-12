<?php

namespace SForce\Wsdl;

class MatchRecord
{
    /**
     * @var AdditionalInformationMap[]
     */
    protected $additionalInformation = null;

    /**
     * @var FieldDiff[]
     */
    protected $fieldDiffs = null;

    /**
     * @var float
     */
    protected $matchConfidence = null;

    /**
     * @var sObject
     */
    protected $record = null;

    /**
     * @param float $matchConfidence
     * @param sObject $record
     */
    public function __construct($matchConfidence = null, $record = null)
    {
        $this->matchConfidence = $matchConfidence;
        $this->record = $record;
    }

    /**
     * @return AdditionalInformationMap[]
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * @param AdditionalInformationMap[] $additionalInformation
     * @return \SForce\Wsdl\MatchRecord
     */
    public function setAdditionalInformation(array $additionalInformation = null)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * @return FieldDiff[]
     */
    public function getFieldDiffs()
    {
        return $this->fieldDiffs;
    }

    /**
     * @param FieldDiff[] $fieldDiffs
     * @return \SForce\Wsdl\MatchRecord
     */
    public function setFieldDiffs(array $fieldDiffs = null)
    {
        $this->fieldDiffs = $fieldDiffs;
        return $this;
    }

    /**
     * @return float
     */
    public function getMatchConfidence()
    {
        return $this->matchConfidence;
    }

    /**
     * @param float $matchConfidence
     * @return \SForce\Wsdl\MatchRecord
     */
    public function setMatchConfidence($matchConfidence)
    {
        $this->matchConfidence = $matchConfidence;
        return $this;
    }

    /**
     * @return sObject
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * @param sObject $record
     * @return \SForce\Wsdl\MatchRecord
     */
    public function setRecord($record)
    {
        $this->record = $record;
        return $this;
    }
}
