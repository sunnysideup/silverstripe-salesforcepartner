<?php

namespace SForce\Wsdl;

class describeSoqlListViews
{
    /**
     * @var DescribeSoqlListViewsRequest
     */
    protected $request = null;

    /**
     * @param DescribeSoqlListViewsRequest $request
     */
    public function __construct($request = null)
    {
        $this->request = $request;
    }

    /**
     * @return DescribeSoqlListViewsRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param DescribeSoqlListViewsRequest $request
     * @return \SForce\Wsdl\describeSoqlListViews
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }
}
