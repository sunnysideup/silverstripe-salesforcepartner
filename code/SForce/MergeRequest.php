<?php

namespace SForce\Wsdl;

class MergeRequest
{

    /**
     * @var AdditionalInformationMap[] $additionalInformationMap
     */
    protected $additionalInformationMap = null;

    /**
     * @var sObject $masterRecord
     */
    protected $masterRecord = null;

    /**
     * @var ID[] $recordToMergeIds
     */
    protected $recordToMergeIds = null;

    /**
     * @param sObject $masterRecord
     * @param ID[] $recordToMergeIds
     */
    public function __construct($masterRecord = null, array $recordToMergeIds = null)
    {
      $this->masterRecord = $masterRecord;
      $this->recordToMergeIds = $recordToMergeIds;
    }

    /**
     * @return AdditionalInformationMap[]
     */
    public function getAdditionalInformationMap()
    {
      return $this->additionalInformationMap;
    }

    /**
     * @param AdditionalInformationMap[] $additionalInformationMap
     * @return \SForce\Wsdl\MergeRequest
     */
    public function setAdditionalInformationMap(array $additionalInformationMap = null)
    {
      $this->additionalInformationMap = $additionalInformationMap;
      return $this;
    }

    /**
     * @return sObject
     */
    public function getMasterRecord()
    {
      return $this->masterRecord;
    }

    /**
     * @param sObject $masterRecord
     * @return \SForce\Wsdl\MergeRequest
     */
    public function setMasterRecord($masterRecord)
    {
      $this->masterRecord = $masterRecord;
      return $this;
    }

    /**
     * @return ID[]
     */
    public function getRecordToMergeIds()
    {
      return $this->recordToMergeIds;
    }

    /**
     * @param ID[] $recordToMergeIds
     * @return \SForce\Wsdl\MergeRequest
     */
    public function setRecordToMergeIds(array $recordToMergeIds)
    {
      $this->recordToMergeIds = $recordToMergeIds;
      return $this;
    }

}
