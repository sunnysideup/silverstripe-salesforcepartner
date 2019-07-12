<?php

namespace SForce\Wsdl;

class ResetPasswordResult
{
    /**
     * @var string
     */
    protected $password = null;

    /**
     * @param string $password
     */
    public function __construct($password = null)
    {
        $this->password = $password;
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
     * @return \SForce\Wsdl\ResetPasswordResult
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}
