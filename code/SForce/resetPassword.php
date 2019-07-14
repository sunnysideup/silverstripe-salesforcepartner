<?php

namespace SForce\Wsdl;

class resetPassword
{
    /**
     * @var ID
     */
    protected $userId = null;

    /**
     * @param ID $userId
     */
    public function __construct($userId = null)
    {
        $this->userId = $userId;
    }

    /**
     * @return ID
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param ID $userId
     * @return \SForce\Wsdl\resetPassword
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }
}
