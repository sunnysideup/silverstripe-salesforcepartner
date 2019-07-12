<?php

namespace SForce\Wsdl;

class invalidateSessionsResponse
{

    /**
     * @var InvalidateSessionsResult $result
     */
    protected $result = null;

    /**
     * @param InvalidateSessionsResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return InvalidateSessionsResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param InvalidateSessionsResult $result
     * @return \SForce\Wsdl\invalidateSessionsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
