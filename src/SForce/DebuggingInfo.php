<?php

namespace SForce\Wsdl;

class DebuggingInfo
{
    /**
     * @var string
     */
    protected $debugLog = null;

    /**
     * @param string $debugLog
     */
    public function __construct($debugLog = null)
    {
        $this->debugLog = $debugLog;
    }

    /**
     * @return string
     */
    public function getDebugLog()
    {
        return $this->debugLog;
    }

    /**
     * @param string $debugLog
     * @return \SForce\Wsdl\DebuggingInfo
     */
    public function setDebugLog($debugLog)
    {
        $this->debugLog = $debugLog;
        return $this;
    }
}
