<?php

namespace SForce\Wsdl;

class setPassword
{
    /**
     * @var ID
     */
    protected $userId = null;

    /**
     * @var string
     */
    protected $password = null;

    /**
     * @param ID $userId
     * @param string $password
     */
    public function __construct($userId = null, $password = null)
    {
        $this->userId = $userId;
        $this->password = $password;
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
     * @return \SForce\Wsdl\setPassword
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \SForce\Wsdl\setPassword
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
