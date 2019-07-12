<?php

namespace SForce\Wsdl;

class DescribeSoqlListViewResult
{

    /**
     * @var DescribeSoqlListView[] $describeSoqlListViews
     */
    protected $describeSoqlListViews = null;

    /**
     * @param DescribeSoqlListView[] $describeSoqlListViews
     */
    public function __construct(array $describeSoqlListViews = null)
    {
      $this->describeSoqlListViews = $describeSoqlListViews;
    }

    /**
     * @return DescribeSoqlListView[]
     */
    public function getDescribeSoqlListViews()
    {
      return $this->describeSoqlListViews;
    }

    /**
     * @param DescribeSoqlListView[] $describeSoqlListViews
     * @return \SForce\Wsdl\DescribeSoqlListViewResult
     */
    public function setDescribeSoqlListViews(array $describeSoqlListViews)
    {
      $this->describeSoqlListViews = $describeSoqlListViews;
      return $this;
    }

}
