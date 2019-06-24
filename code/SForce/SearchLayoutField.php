<?php

namespace SForce\Wsdl;

class SearchLayoutField
{

    /**
     * @var string $apiName
     */
    protected $apiName = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var boolean $sortable
     */
    protected $sortable = null;

    /**
     * @param string $apiName
     * @param string $label
     * @param boolean $sortable
     */
    public function __construct($apiName = null, $label = null, $sortable = null)
    {
      $this->apiName = $apiName;
      $this->label = $label;
      $this->sortable = $sortable;
    }

    /**
     * @return string
     */
    public function getApiName()
    {
      return $this->apiName;
    }

    /**
     * @param string $apiName
     * @return \SForce\Wsdl\SearchLayoutField
     */
    public function setApiName($apiName)
    {
      $this->apiName = $apiName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \SForce\Wsdl\SearchLayoutField
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSortable()
    {
      return $this->sortable;
    }

    /**
     * @param boolean $sortable
     * @return \SForce\Wsdl\SearchLayoutField
     */
    public function setSortable($sortable)
    {
      $this->sortable = $sortable;
      return $this;
    }

}
