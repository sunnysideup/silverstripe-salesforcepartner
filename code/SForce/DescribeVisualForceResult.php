<?php

namespace SForce\Wsdl;

class DescribeVisualForceResult
{
    /**
     * @var string
     */
    protected $domain = null;

    /**
     * @param string $domain
     */
    public function __construct($domain = null)
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return \SForce\Wsdl\DescribeVisualForceResult
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
