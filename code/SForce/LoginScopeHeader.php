<?php

namespace SForce\Wsdl;

class LoginScopeHeader
{
    /**
     * @var ID
     */
    protected $organizationId = null;

    /**
     * @var ID
     */
    protected $portalId = null;

    /**
     * @param ID $organizationId
     * @param ID $portalId
     */
    public function __construct($organizationId = null, $portalId = null)
    {
        $this->organizationId = $organizationId;
        $this->portalId = $portalId;
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
     * @return \SForce\Wsdl\LoginScopeHeader
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * @return ID
     */
    public function getPortalId()
    {
        return $this->portalId;
    }

    /**
     * @param ID $portalId
     * @return \SForce\Wsdl\LoginScopeHeader
     */
    public function setPortalId($portalId)
    {
        $this->portalId = $portalId;
        return $this;
    }
}
