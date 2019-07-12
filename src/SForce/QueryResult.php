<?php

namespace SForce\Wsdl;

class QueryResult
{

    /**
     * @var boolean $done
     */
    protected $done = null;

    /**
     * @var QueryLocator $queryLocator
     */
    protected $queryLocator = null;

    /**
     * @var sObject[] $records
     */
    protected $records = null;

    /**
     * @var int $size
     */
    protected $size = null;

    /**
     * @param boolean $done
     * @param int $size
     */
    public function __construct($done = null, $size = null)
    {
      $this->done = $done;
      $this->size = $size;
    }

    /**
     * @return boolean
     */
    public function getDone()
    {
      return $this->done;
    }

    /**
     * @param boolean $done
     * @return \SForce\Wsdl\QueryResult
     */
    public function setDone($done)
    {
      $this->done = $done;
      return $this;
    }

    /**
     * @return QueryLocator
     */
    public function getQueryLocator()
    {
      return $this->queryLocator;
    }

    /**
     * @param QueryLocator $queryLocator
     * @return \SForce\Wsdl\QueryResult
     */
    public function setQueryLocator($queryLocator)
    {
      $this->queryLocator = $queryLocator;
      return $this;
    }

    /**
     * @return sObject[]
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param sObject[] $records
     * @return \SForce\Wsdl\QueryResult
     */
    public function setRecords(array $records = null)
    {
      $this->records = $records;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param int $size
     * @return \SForce\Wsdl\QueryResult
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

}
