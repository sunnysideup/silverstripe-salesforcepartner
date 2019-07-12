<?php

namespace SForce\Wsdl;

class GetUserInfoResult
{
    /**
     * @var boolean
     */
    protected $accessibilityMode = null;

    /**
     * @var boolean
     */
    protected $chatterExternal = null;

    /**
     * @var string
     */
    protected $currencySymbol = null;

    /**
     * @var int
     */
    protected $orgAttachmentFileSizeLimit = null;

    /**
     * @var string
     */
    protected $orgDefaultCurrencyIsoCode = null;

    /**
     * @var string
     */
    protected $orgDefaultCurrencyLocale = null;

    /**
     * @var boolean
     */
    protected $orgDisallowHtmlAttachments = null;

    /**
     * @var boolean
     */
    protected $orgHasPersonAccounts = null;

    /**
     * @var ID
     */
    protected $organizationId = null;

    /**
     * @var boolean
     */
    protected $organizationMultiCurrency = null;

    /**
     * @var string
     */
    protected $organizationName = null;

    /**
     * @var ID
     */
    protected $profileId = null;

    /**
     * @var ID
     */
    protected $roleId = null;

    /**
     * @var int
     */
    protected $sessionSecondsValid = null;

    /**
     * @var string
     */
    protected $userDefaultCurrencyIsoCode = null;

    /**
     * @var string
     */
    protected $userEmail = null;

    /**
     * @var string
     */
    protected $userFullName = null;

    /**
     * @var ID
     */
    protected $userId = null;

    /**
     * @var string
     */
    protected $userLanguage = null;

    /**
     * @var string
     */
    protected $userLocale = null;

    /**
     * @var string
     */
    protected $userName = null;

    /**
     * @var string
     */
    protected $userTimeZone = null;

    /**
     * @var string
     */
    protected $userType = null;

    /**
     * @var string
     */
    protected $userUiSkin = null;

    /**
     * @param boolean $accessibilityMode
     * @param boolean $chatterExternal
     * @param int $orgAttachmentFileSizeLimit
     * @param boolean $orgDisallowHtmlAttachments
     * @param boolean $orgHasPersonAccounts
     * @param ID $organizationId
     * @param boolean $organizationMultiCurrency
     * @param string $organizationName
     * @param ID $profileId
     * @param int $sessionSecondsValid
     * @param string $userEmail
     * @param string $userFullName
     * @param ID $userId
     * @param string $userLanguage
     * @param string $userLocale
     * @param string $userName
     * @param string $userTimeZone
     * @param string $userType
     * @param string $userUiSkin
     */
    public function __construct($accessibilityMode = null, $chatterExternal = null, $orgAttachmentFileSizeLimit = null, $orgDisallowHtmlAttachments = null, $orgHasPersonAccounts = null, $organizationId = null, $organizationMultiCurrency = null, $organizationName = null, $profileId = null, $sessionSecondsValid = null, $userEmail = null, $userFullName = null, $userId = null, $userLanguage = null, $userLocale = null, $userName = null, $userTimeZone = null, $userType = null, $userUiSkin = null)
    {
        $this->accessibilityMode = $accessibilityMode;
        $this->chatterExternal = $chatterExternal;
        $this->orgAttachmentFileSizeLimit = $orgAttachmentFileSizeLimit;
        $this->orgDisallowHtmlAttachments = $orgDisallowHtmlAttachments;
        $this->orgHasPersonAccounts = $orgHasPersonAccounts;
        $this->organizationId = $organizationId;
        $this->organizationMultiCurrency = $organizationMultiCurrency;
        $this->organizationName = $organizationName;
        $this->profileId = $profileId;
        $this->sessionSecondsValid = $sessionSecondsValid;
        $this->userEmail = $userEmail;
        $this->userFullName = $userFullName;
        $this->userId = $userId;
        $this->userLanguage = $userLanguage;
        $this->userLocale = $userLocale;
        $this->userName = $userName;
        $this->userTimeZone = $userTimeZone;
        $this->userType = $userType;
        $this->userUiSkin = $userUiSkin;
    }

    /**
     * @return boolean
     */
    public function getAccessibilityMode()
    {
        return $this->accessibilityMode;
    }

    /**
     * @param boolean $accessibilityMode
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setAccessibilityMode($accessibilityMode)
    {
        $this->accessibilityMode = $accessibilityMode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getChatterExternal()
    {
        return $this->chatterExternal;
    }

    /**
     * @param boolean $chatterExternal
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setChatterExternal($chatterExternal)
    {
        $this->chatterExternal = $chatterExternal;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * @param string $currencySymbol
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrgAttachmentFileSizeLimit()
    {
        return $this->orgAttachmentFileSizeLimit;
    }

    /**
     * @param int $orgAttachmentFileSizeLimit
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrgAttachmentFileSizeLimit($orgAttachmentFileSizeLimit)
    {
        $this->orgAttachmentFileSizeLimit = $orgAttachmentFileSizeLimit;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgDefaultCurrencyIsoCode()
    {
        return $this->orgDefaultCurrencyIsoCode;
    }

    /**
     * @param string $orgDefaultCurrencyIsoCode
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrgDefaultCurrencyIsoCode($orgDefaultCurrencyIsoCode)
    {
        $this->orgDefaultCurrencyIsoCode = $orgDefaultCurrencyIsoCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgDefaultCurrencyLocale()
    {
        return $this->orgDefaultCurrencyLocale;
    }

    /**
     * @param string $orgDefaultCurrencyLocale
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrgDefaultCurrencyLocale($orgDefaultCurrencyLocale)
    {
        $this->orgDefaultCurrencyLocale = $orgDefaultCurrencyLocale;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrgDisallowHtmlAttachments()
    {
        return $this->orgDisallowHtmlAttachments;
    }

    /**
     * @param boolean $orgDisallowHtmlAttachments
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrgDisallowHtmlAttachments($orgDisallowHtmlAttachments)
    {
        $this->orgDisallowHtmlAttachments = $orgDisallowHtmlAttachments;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrgHasPersonAccounts()
    {
        return $this->orgHasPersonAccounts;
    }

    /**
     * @param boolean $orgHasPersonAccounts
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrgHasPersonAccounts($orgHasPersonAccounts)
    {
        $this->orgHasPersonAccounts = $orgHasPersonAccounts;
        return $this;
    }

    /**
     * @return ID
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @param ID $organizationId
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOrganizationMultiCurrency()
    {
        return $this->organizationMultiCurrency;
    }

    /**
     * @param boolean $organizationMultiCurrency
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrganizationMultiCurrency($organizationMultiCurrency)
    {
        $this->organizationMultiCurrency = $organizationMultiCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param string $organizationName
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
        return $this;
    }

    /**
     * @return ID
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * @param ID $profileId
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * @return ID
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param ID $roleId
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSessionSecondsValid()
    {
        return $this->sessionSecondsValid;
    }

    /**
     * @param int $sessionSecondsValid
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setSessionSecondsValid($sessionSecondsValid)
    {
        $this->sessionSecondsValid = $sessionSecondsValid;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserDefaultCurrencyIsoCode()
    {
        return $this->userDefaultCurrencyIsoCode;
    }

    /**
     * @param string $userDefaultCurrencyIsoCode
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserDefaultCurrencyIsoCode($userDefaultCurrencyIsoCode)
    {
        $this->userDefaultCurrencyIsoCode = $userDefaultCurrencyIsoCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserFullName()
    {
        return $this->userFullName;
    }

    /**
     * @param string $userFullName
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserFullName($userFullName)
    {
        $this->userFullName = $userFullName;
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
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * @param string $userLanguage
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserLanguage($userLanguage)
    {
        $this->userLanguage = $userLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserLocale()
    {
        return $this->userLocale;
    }

    /**
     * @param string $userLocale
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserLocale($userLocale)
    {
        $this->userLocale = $userLocale;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserTimeZone()
    {
        return $this->userTimeZone;
    }

    /**
     * @param string $userTimeZone
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserTimeZone($userTimeZone)
    {
        $this->userTimeZone = $userTimeZone;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param string $userType
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserUiSkin()
    {
        return $this->userUiSkin;
    }

    /**
     * @param string $userUiSkin
     * @return \SForce\Wsdl\GetUserInfoResult
     */
    public function setUserUiSkin($userUiSkin)
    {
        $this->userUiSkin = $userUiSkin;
        return $this;
    }
}
