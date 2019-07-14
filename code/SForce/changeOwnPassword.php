<?php

namespace SForce\Wsdl;

class changeOwnPassword
{
    /**
     * @var string
     */
    protected $oldPassword = null;

    /**
     * @var string
     */
    protected $newPassword = null;

    /**
     * @param string $oldPassword
     * @param string $newPassword
     */
    public function __construct($oldPassword = null, $newPassword = null)
    {
        $this->oldPassword = $oldPassword;
        $this->newPassword = $newPassword;
    }

    /**
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * @param string $oldPassword
     * @return \SForce\Wsdl\changeOwnPassword
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \SForce\Wsdl\changeOwnPassword
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }
}
