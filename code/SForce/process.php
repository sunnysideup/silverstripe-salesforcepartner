<?php

namespace SForce\Wsdl;

class process
{

    /**
     * @var ProcessRequest $actions
     */
    protected $actions = null;

    /**
     * @param ProcessRequest $actions
     */
    public function __construct($actions = null)
    {
      $this->actions = $actions;
    }

    /**
     * @return ProcessRequest
     */
    public function getActions()
    {
      return $this->actions;
    }

    /**
     * @param ProcessRequest $actions
     * @return \SForce\Wsdl\process
     */
    public function setActions($actions)
    {
      $this->actions = $actions;
      return $this;
    }

}
