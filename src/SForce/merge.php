<?php

namespace SForce\Wsdl;

class merge
{
    /**
     * @var MergeRequest
     */
    protected $request = null;

    /**
     * @param MergeRequest $request
     */
    public function __construct($request = null)
    {
        $this->request = $request;
    }

    /**
     * @return MergeRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param MergeRequest $request
     * @return \SForce\Wsdl\merge
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
