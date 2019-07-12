<?php

namespace SForce\Wsdl;

class EntityIntentQueryMetadata
{
    /**
     * @var boolean
     */
    protected $intentQuery = null;

    /**
     * @var string
     */
    protected $message = null;

    public function __construct()
    {
    }

    /**
     * @return boolean
     */
    public function getIntentQuery()
    {
        return $this->intentQuery;
    }

    /**
     * @param boolean $intentQuery
     * @return \SForce\Wsdl\EntityIntentQueryMetadata
     */
    public function setIntentQuery($intentQuery)
    {
        $this->intentQuery = $intentQuery;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return \SForce\Wsdl\EntityIntentQueryMetadata
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}
