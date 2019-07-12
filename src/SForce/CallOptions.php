<?php

namespace SForce\Wsdl;

class CallOptions
{
    /**
     * @var string
     */
    protected $client = null;

    /**
     * @var string
     */
    protected $defaultNamespace = null;

    /**
     * @param string $client
     * @param string $defaultNamespace
     */
    public function __construct($client = null, $defaultNamespace = null)
    {
        $this->client = $client;
        $this->defaultNamespace = $defaultNamespace;
    }

    /**
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param string $client
     * @return \SForce\Wsdl\CallOptions
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultNamespace()
    {
        return $this->defaultNamespace;
    }

    /**
     * @param string $defaultNamespace
     * @return \SForce\Wsdl\CallOptions
     */
    public function setDefaultNamespace($defaultNamespace)
    {
        $this->defaultNamespace = $defaultNamespace;
        return $this;
    }
}
