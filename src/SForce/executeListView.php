<?php

namespace SForce\Wsdl;

class executeListView
{
    /**
     * @var ExecuteListViewRequest
     */
    protected $request = null;

    /**
     * @param ExecuteListViewRequest $request
     */
    public function __construct($request = null)
    {
        $this->request = $request;
    }

    /**
     * @return ExecuteListViewRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param ExecuteListViewRequest $request
     * @return \SForce\Wsdl\executeListView
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
