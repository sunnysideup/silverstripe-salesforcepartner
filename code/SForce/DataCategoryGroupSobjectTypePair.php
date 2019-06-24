<?php

namespace SForce\Wsdl;

class DataCategoryGroupSobjectTypePair
{

    /**
     * @var string $dataCategoryGroupName
     */
    protected $dataCategoryGroupName = null;

    /**
     * @var string $sobject
     */
    protected $sobject = null;

    /**
     * @param string $dataCategoryGroupName
     * @param string $sobject
     */
    public function __construct($dataCategoryGroupName = null, $sobject = null)
    {
      $this->dataCategoryGroupName = $dataCategoryGroupName;
      $this->sobject = $sobject;
    }

    /**
     * @return string
     */
    public function getDataCategoryGroupName()
    {
      return $this->dataCategoryGroupName;
    }

    /**
     * @param string $dataCategoryGroupName
     * @return \SForce\Wsdl\DataCategoryGroupSobjectTypePair
     */
    public function setDataCategoryGroupName($dataCategoryGroupName)
    {
      $this->dataCategoryGroupName = $dataCategoryGroupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSobject()
    {
      return $this->sobject;
    }

    /**
     * @param string $sobject
     * @return \SForce\Wsdl\DataCategoryGroupSobjectTypePair
     */
    public function setSobject($sobject)
    {
      $this->sobject = $sobject;
      return $this;
    }

}
