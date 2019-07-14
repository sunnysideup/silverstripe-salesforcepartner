<?php

namespace SForce\Wsdl;

class SearchRecord
{
    /**
     * @var sObject
     */
    protected $record = null;

    /**
     * @var SearchRecordMetadata
     */
    protected $searchRecordMetadata = null;

    /**
     * @var SearchSnippet
     */
    protected $snippet = null;

    /**
     * @param sObject $record
     */
    public function __construct($record = null)
    {
        $this->record = $record;
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
     * @return \SForce\Wsdl\SearchRecord
     */
    public function setRecord($record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * @return SearchRecordMetadata
     */
    public function getSearchRecordMetadata()
    {
        return $this->searchRecordMetadata;
    }

    /**
     * @param SearchRecordMetadata $searchRecordMetadata
     * @return \SForce\Wsdl\SearchRecord
     */
    public function setSearchRecordMetadata($searchRecordMetadata)
    {
        $this->searchRecordMetadata = $searchRecordMetadata;
        return $this;
    }

    /**
     * @return SearchSnippet
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param SearchSnippet $snippet
     * @return \SForce\Wsdl\SearchRecord
     */
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;
        return $this;
    }
}
