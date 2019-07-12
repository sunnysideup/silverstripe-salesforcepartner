<?php

namespace SForce\Wsdl;

class DescribeSoftphoneLayoutSection
{

    /**
     * @var string $entityApiName
     */
    protected $entityApiName = null;

    /**
     * @var DescribeSoftphoneLayoutItem[] $items
     */
    protected $items = null;

    /**
     * @param string $entityApiName
     * @param DescribeSoftphoneLayoutItem[] $items
     */
    public function __construct($entityApiName = null, array $items = null)
    {
      $this->entityApiName = $entityApiName;
      $this->items = $items;
    }

    /**
     * @return string
     */
    public function getEntityApiName()
    {
      return $this->entityApiName;
    }

    /**
     * @param string $entityApiName
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutSection
     */
    public function setEntityApiName($entityApiName)
    {
      $this->entityApiName = $entityApiName;
      return $this;
    }

    /**
     * @return DescribeSoftphoneLayoutItem[]
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param DescribeSoftphoneLayoutItem[] $items
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutSection
     */
    public function setItems(array $items)
    {
      $this->items = $items;
      return $this;
    }

}
