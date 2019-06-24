<?php

namespace SForce\Wsdl;

class DescribeSoqlListViewsRequest
{

    /**
     * @var DescribeSoqlListViewParams[] $listViewParams
     */
    protected $listViewParams = null;

    /**
     * @param DescribeSoqlListViewParams[] $listViewParams
     */
    public function __construct(array $listViewParams = null)
    {
      $this->listViewParams = $listViewParams;
    }

    /**
     * @return DescribeSoqlListViewParams[]
     */
    public function getListViewParams()
    {
      return $this->listViewParams;
    }

    /**
     * @param DescribeSoqlListViewParams[] $listViewParams
     * @return \SForce\Wsdl\DescribeSoqlListViewsRequest
     */
    public function setListViewParams(array $listViewParams)
    {
      $this->listViewParams = $listViewParams;
      return $this;
    }

}
