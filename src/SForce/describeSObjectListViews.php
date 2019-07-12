<?php

namespace SForce\Wsdl;

class describeSObjectListViews
{

    /**
     * @var string $sObjectType
     */
    protected $sObjectType = null;

    /**
     * @var boolean $recentsOnly
     */
    protected $recentsOnly = null;

    /**
     * @var listViewIsSoqlCompatible $isSoqlCompatible
     */
    protected $isSoqlCompatible = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @param string $sObjectType
     * @param boolean $recentsOnly
     * @param listViewIsSoqlCompatible $isSoqlCompatible
     * @param int $limit
     * @param int $offset
     */
    public function __construct($sObjectType = null, $recentsOnly = null, $isSoqlCompatible = null, $limit = null, $offset = null)
    {
      $this->sObjectType = $sObjectType;
      $this->recentsOnly = $recentsOnly;
      $this->isSoqlCompatible = $isSoqlCompatible;
      $this->limit = $limit;
      $this->offset = $offset;
    }

    /**
     * @return string
     */
    public function getSObjectType()
    {
      return $this->sObjectType;
    }

    /**
     * @param string $sObjectType
     * @return \SForce\Wsdl\describeSObjectListViews
     */
    public function setSObjectType($sObjectType)
    {
      $this->sObjectType = $sObjectType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecentsOnly()
    {
      return $this->recentsOnly;
    }

    /**
     * @param boolean $recentsOnly
     * @return \SForce\Wsdl\describeSObjectListViews
     */
    public function setRecentsOnly($recentsOnly)
    {
      $this->recentsOnly = $recentsOnly;
      return $this;
    }

    /**
     * @return listViewIsSoqlCompatible
     */
    public function getIsSoqlCompatible()
    {
      return $this->isSoqlCompatible;
    }

    /**
     * @param listViewIsSoqlCompatible $isSoqlCompatible
     * @return \SForce\Wsdl\describeSObjectListViews
     */
    public function setIsSoqlCompatible($isSoqlCompatible)
    {
      $this->isSoqlCompatible = $isSoqlCompatible;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param int $limit
     * @return \SForce\Wsdl\describeSObjectListViews
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \SForce\Wsdl\describeSObjectListViews
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

}
