<?php

namespace SForce\Wsdl;

class DescribeSoqlListViewParams
{

    /**
     * @var string $developerNameOrId
     */
    protected $developerNameOrId = null;

    /**
     * @var string $sobjectType
     */
    protected $sobjectType = null;

    /**
     * @param string $developerNameOrId
     */
    public function __construct($developerNameOrId = null)
    {
      $this->developerNameOrId = $developerNameOrId;
    }

    /**
     * @return string
     */
    public function getDeveloperNameOrId()
    {
      return $this->developerNameOrId;
    }

    /**
     * @param string $developerNameOrId
     * @return \SForce\Wsdl\DescribeSoqlListViewParams
     */
    public function setDeveloperNameOrId($developerNameOrId)
    {
      $this->developerNameOrId = $developerNameOrId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSobjectType()
    {
      return $this->sobjectType;
    }

    /**
     * @param string $sobjectType
     * @return \SForce\Wsdl\DescribeSoqlListViewParams
     */
    public function setSobjectType($sobjectType)
    {
      $this->sobjectType = $sobjectType;
      return $this;
    }

}
