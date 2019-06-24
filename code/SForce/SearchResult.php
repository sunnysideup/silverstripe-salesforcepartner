<?php

namespace SForce\Wsdl;

class SearchResult
{

    /**
     * @var string $queryId
     */
    protected $queryId = null;

    /**
     * @var SearchRecord[] $searchRecords
     */
    protected $searchRecords = null;

    /**
     * @var SearchResultsMetadata $searchResultsMetadata
     */
    protected $searchResultsMetadata = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getQueryId()
    {
      return $this->queryId;
    }

    /**
     * @param string $queryId
     * @return \SForce\Wsdl\SearchResult
     */
    public function setQueryId($queryId)
    {
      $this->queryId = $queryId;
      return $this;
    }

    /**
     * @return SearchRecord[]
     */
    public function getSearchRecords()
    {
      return $this->searchRecords;
    }

    /**
     * @param SearchRecord[] $searchRecords
     * @return \SForce\Wsdl\SearchResult
     */
    public function setSearchRecords(array $searchRecords = null)
    {
      $this->searchRecords = $searchRecords;
      return $this;
    }

    /**
     * @return SearchResultsMetadata
     */
    public function getSearchResultsMetadata()
    {
      return $this->searchResultsMetadata;
    }

    /**
     * @param SearchResultsMetadata $searchResultsMetadata
     * @return \SForce\Wsdl\SearchResult
     */
    public function setSearchResultsMetadata($searchResultsMetadata)
    {
      $this->searchResultsMetadata = $searchResultsMetadata;
      return $this;
    }

}
