<?php

namespace SForce\Wsdl;

class sendEmail
{
    /**
     * @var Email
     */
    protected $messages = null;

    /**
     * @param Email $messages
     */
    public function __construct($messages = null)
    {
        $this->messages = $messages;
    }

    /**
     * @return Email
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param Email $messages
     * @return \SForce\Wsdl\sendEmail
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }
}
