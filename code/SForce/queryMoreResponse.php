<?php

namespace SForce\Wsdl;

class queryMoreResponse
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
     * @return \SForce\Wsdl\queryMoreResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
