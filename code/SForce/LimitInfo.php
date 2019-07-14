<?php

namespace SForce\Wsdl;

class LimitInfo
{
    /**
     * @var int
     */
    protected $current = null;

    /**
     * @var int
     */
    protected $limit = null;

    /**
     * @var string
     */
    protected $type = null;

    /**
     * @param int $current
     * @param int $limit
     * @param string $type
     */
    public function __construct($current = null, $limit = null, $type = null)
    {
        $this->current = $current;
        $this->limit = $limit;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param int $current
     * @return \SForce\Wsdl\LimitInfo
     */
    public function setCurrent($current)
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return \SForce\Wsdl\LimitInfo
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return \SForce\Wsdl\LimitInfo
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
