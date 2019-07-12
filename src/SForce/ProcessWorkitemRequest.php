<?php

namespace SForce\Wsdl;

class ProcessWorkitemRequest extends ProcessRequest
{
    /**
     * @var string
     */
    protected $action = null;

    /**
     * @var ID
     */
    protected $workitemId = null;

    /**
     * @param string $action
     * @param ID $workitemId
     */
    public function __construct($action = null, $workitemId = null)
    {
        parent::__construct();
        $this->action = $action;
        $this->workitemId = $workitemId;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return \SForce\Wsdl\ProcessWorkitemRequest
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return ID
     */
    public function getWorkitemId()
    {
        return $this->workitemId;
    }

    /**
     * @param ID $workitemId
     * @return \SForce\Wsdl\ProcessWorkitemRequest
     */
    public function setWorkitemId($workitemId)
    {
        $this->workitemId = $workitemId;
        return $this;
    }
}
