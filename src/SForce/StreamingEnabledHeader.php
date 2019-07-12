<?php

namespace SForce\Wsdl;

class StreamingEnabledHeader
{

    /**
     * @var boolean $streamingEnabled
     */
    protected $streamingEnabled = null;

    /**
     * @param boolean $streamingEnabled
     */
    public function __construct($streamingEnabled = null)
    {
      $this->streamingEnabled = $streamingEnabled;
    }

    /**
     * @return boolean
     */
    public function getStreamingEnabled()
    {
      return $this->streamingEnabled;
    }

    /**
     * @param boolean $streamingEnabled
     * @return \SForce\Wsdl\StreamingEnabledHeader
     */
    public function setStreamingEnabled($streamingEnabled)
    {
      $this->streamingEnabled = $streamingEnabled;
      return $this;
    }

}
