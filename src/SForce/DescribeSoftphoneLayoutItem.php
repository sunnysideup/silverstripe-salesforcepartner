<?php

namespace SForce\Wsdl;

class DescribeSoftphoneLayoutItem
{

    /**
     * @var string $itemApiName
     */
    protected $itemApiName = null;

    /**
     * @param string $itemApiName
     */
    public function __construct($itemApiName = null)
    {
      $this->itemApiName = $itemApiName;
    }

    /**
     * @return string
     */
    public function getItemApiName()
    {
      return $this->itemApiName;
    }

    /**
     * @param string $itemApiName
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutItem
     */
    public function setItemApiName($itemApiName)
    {
      $this->itemApiName = $itemApiName;
      return $this;
    }

}
