<?php

namespace SForce\Wsdl;

class LoginResult
{
    /**
     * @var string
     */
    protected $metadataServerUrl = null;

    /**
     * @var boolean
     */
    protected $passwordExpired = null;

    /**
     * @var boolean
     */
    protected $sandbox = null;

    /**
     * @var string
     */
    protected $serverUrl = null;

    /**
     * @var string
     */
    protected $sessionId = null;

    /**
     * @var ID
     */
    protected $userId = null;

    /**
     * @var GetUserInfoResult
     */
    protected $userInfo = null;

    /**
     * @param boolean $passwordExpired
     * @param boolean $sandbox
     */
    public function __construct($passwordExpired = null, $sandbox = null)
    {
        $this->passwordExpired = $passwordExpired;
        $this->sandbox = $sandbox;
    }

    /**
     * @return string
     */
    public function getMetadataServerUrl()
    {
        return $this->metadataServerUrl;
    }

    /**
     * @param string $metadataServerUrl
     * @return \SForce\Wsdl\LoginResult
     */
    public function setMetadataServerUrl($metadataServerUrl)
    {
        $this->metadataServerUrl = $metadataServerUrl;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPasswordExpired()
    {
        return $this->passwordExpired;
    }

    /**
     * @param boolean $passwordExpired
     * @return \SForce\Wsdl\LoginResult
     */
    public function setPasswordExpired($passwordExpired)
    {
        $this->passwordExpired = $passwordExpired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSandbox()
    {
        return $this->sandbox;
    }

    /**
     * @param boolean $sandbox
     * @return \SForce\Wsdl\LoginResult
     */
    public function setSandbox($sandbox)
    {
        $this->sandbox = $sandbox;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }

    /**
     * @param string $serverUrl
     * @return \SForce\Wsdl\LoginResult
     */
    public function setServerUrl($serverUrl)
    {
        $this->serverUrl = $serverUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \SForce\Wsdl\LoginResult
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
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
     * @return \SForce\Wsdl\LoginResult
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return GetUserInfoResult
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * @param GetUserInfoResult $userInfo
     * @return \SForce\Wsdl\LoginResult
     */
    public function setUserInfo($userInfo)
    {
        $this->userInfo = $userInfo;
        return $this;
    }
}
