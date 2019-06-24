<?php

namespace SForce\Wsdl;

class findDuplicatesByIds
{

    /**
     * @var ID $ids
     */
    protected $ids = null;

    /**
     * @param ID $ids
     */
    public function __construct($ids = null)
    {
      $this->ids = $ids;
    }

    /**
     * @return ID
     */
    public function getIds()
    {
      return $this->ids;
    }

    /**
     * @param ID $ids
     * @return \SForce\Wsdl\findDuplicatesByIds
     */
    public function setIds($ids)
    {
      $this->ids = $ids;
      return $this;
    }

}
