<?php

namespace SForce\Wsdl;

class executeListViewResponse
{
    /**
     * @var ExecuteListViewResult
     */
    protected $result = null;

    /**
     * @param ExecuteListViewResult $result
     */
    public function __construct($result = null)
    {
        $this->result = $result;
    }

    /**
     * @return ExecuteListViewResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param ExecuteListViewResult $result
     * @return \SForce\Wsdl\executeListViewResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
