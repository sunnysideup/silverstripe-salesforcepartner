<?php

namespace SForce\Wsdl;

class searchResponse
{

    /**
     * @var SearchResult $result
     */
    protected $result = null;

    /**
     * @param SearchResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return SearchResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param SearchResult $result
     * @return \SForce\Wsdl\searchResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
