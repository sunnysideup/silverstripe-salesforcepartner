<?php

namespace SForce\Wsdl;

class queryAllResponse
{
    /**
     * @var QueryResult
     */
    protected $result = null;

    /**
     * @param QueryResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return QueryResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param QueryResult $result
     * @return \SForce\Wsdl\queryAllResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
