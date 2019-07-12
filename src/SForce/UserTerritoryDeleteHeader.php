<?php

namespace SForce\Wsdl;

class UserTerritoryDeleteHeader
{

    /**
     * @var ID $transferToUserId
     */
    protected $transferToUserId = null;

    /**
     * @param ID $transferToUserId
     */
    public function __construct($transferToUserId = null)
    {
      $this->transferToUserId = $transferToUserId;
    }

    /**
     * @return ID
     */
    public function getTransferToUserId()
    {
      return $this->transferToUserId;
    }

    /**
     * @param ID $transferToUserId
     * @return \SForce\Wsdl\UserTerritoryDeleteHeader
     */
    public function setTransferToUserId($transferToUserId)
    {
      $this->transferToUserId = $transferToUserId;
      return $this;
    }

}
