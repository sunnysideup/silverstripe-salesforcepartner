<?php

namespace SForce\Wsdl;

class invalidateSessions
{

    /**
     * @var string $sessionIds
     */
    protected $sessionIds = null;

    /**
     * @param string $sessionIds
     */
    public function __construct($sessionIds = null)
    {
      $this->sessionIds = $sessionIds;
    }

    /**
     * @return string
     */
    public function getSessionIds()
    {
      return $this->sessionIds;
    }

    /**
     * @param string $sessionIds
     * @return \SForce\Wsdl\invalidateSessions
     */
    public function setSessionIds($sessionIds)
    {
      $this->sessionIds = $sessionIds;
      return $this;
    }

}
