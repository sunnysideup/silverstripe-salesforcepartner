<?php

namespace SForce\Wsdl;

class ProcessRequest
{
    /**
     * @var string
     */
    protected $comments = null;

    /**
     * @var ID[]
     */
    protected $nextApproverIds = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     * @return \SForce\Wsdl\ProcessRequest
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getNextApproverIds()
    {
        return $this->nextApproverIds;
    }

    /**
     * @param ID[] $nextApproverIds
     * @return \SForce\Wsdl\ProcessRequest
     */
    public function setNextApproverIds(array $nextApproverIds = null)
    {
        $this->nextApproverIds = $nextApproverIds;
        return $this;
    }
}
