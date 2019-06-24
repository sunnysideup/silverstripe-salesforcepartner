<?php

namespace SForce\Wsdl;

class describeDataCategoryGroupStructures
{

    /**
     * @var DataCategoryGroupSobjectTypePair $pairs
     */
    protected $pairs = null;

    /**
     * @var boolean $topCategoriesOnly
     */
    protected $topCategoriesOnly = null;

    /**
     * @param DataCategoryGroupSobjectTypePair $pairs
     * @param boolean $topCategoriesOnly
     */
    public function __construct($pairs = null, $topCategoriesOnly = null)
    {
      $this->pairs = $pairs;
      $this->topCategoriesOnly = $topCategoriesOnly;
    }

    /**
     * @return DataCategoryGroupSobjectTypePair
     */
    public function getPairs()
    {
      return $this->pairs;
    }

    /**
     * @param DataCategoryGroupSobjectTypePair $pairs
     * @return \SForce\Wsdl\describeDataCategoryGroupStructures
     */
    public function setPairs($pairs)
    {
      $this->pairs = $pairs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTopCategoriesOnly()
    {
      return $this->topCategoriesOnly;
    }

    /**
     * @param boolean $topCategoriesOnly
     * @return \SForce\Wsdl\describeDataCategoryGroupStructures
     */
    public function setTopCategoriesOnly($topCategoriesOnly)
    {
      $this->topCategoriesOnly = $topCategoriesOnly;
      return $this;
    }

}
