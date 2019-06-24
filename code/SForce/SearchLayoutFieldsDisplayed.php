<?php

namespace SForce\Wsdl;

class SearchLayoutFieldsDisplayed
{

    /**
     * @var boolean $applicable
     */
    protected $applicable = null;

    /**
     * @var SearchLayoutField[] $fields
     */
    protected $fields = null;

    /**
     * @param boolean $applicable
     */
    public function __construct($applicable = null)
    {
      $this->applicable = $applicable;
    }

    /**
     * @return boolean
     */
    public function getApplicable()
    {
      return $this->applicable;
    }

    /**
     * @param boolean $applicable
     * @return \SForce\Wsdl\SearchLayoutFieldsDisplayed
     */
    public function setApplicable($applicable)
    {
      $this->applicable = $applicable;
      return $this;
    }

    /**
     * @return SearchLayoutField[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param SearchLayoutField[] $fields
     * @return \SForce\Wsdl\SearchLayoutFieldsDisplayed
     */
    public function setFields(array $fields = null)
    {
      $this->fields = $fields;
      return $this;
    }

}
