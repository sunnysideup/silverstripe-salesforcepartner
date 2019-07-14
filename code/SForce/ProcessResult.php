<?php

namespace SForce\Wsdl;

class ProcessResult
{
    /**
     * @var ID[]
     */
    protected $actorIds = null;

    /**
     * @var ID
     */
    protected $entityId = null;

    /**
     * @var Error[]
     */
    protected $errors = null;

    /**
     * @var ID
     */
    protected $instanceId = null;

    /**
     * @var string
     */
    protected $instanceStatus = null;

    /**
     * @var ID[]
     */
    protected $newWorkitemIds = null;

    /**
     * @var boolean
     */
    protected $success = null;

    /**
     * @param boolean $success
     */
    public function __construct($success = null)
    {
        $this->success = $success;
    }

    /**
     * @return ID[]
     */
    public function getActorIds()
    {
        return $this->actorIds;
    }

    /**
     * @param ID[] $actorIds
     * @return \SForce\Wsdl\ProcessResult
     */
    public function setActorIds(array $actorIds = null)
    {
        $this->actorIds = $actorIds;
        return $this;
    }

    /**
     * @return ID
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param ID $entityId
     * @return \SForce\Wsdl\ProcessResult
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \SForce\Wsdl\ProcessResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return ID
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }

    /**
     * @param ID $instanceId
     * @return \SForce\Wsdl\ProcessResult
     */
    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstanceStatus()
    {
        return $this->instanceStatus;
    }

    /**
     * @param string $instanceStatus
     * @return \SForce\Wsdl\ProcessResult
     */
    public function setInstanceStatus($instanceStatus)
    {
        $this->instanceStatus = $instanceStatus;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getNewWorkitemIds()
    {
        return $this->newWorkitemIds;
    }

    /**
     * @param ID[] $newWorkitemIds
     * @return \SForce\Wsdl\ProcessResult
     */
    public function setNewWorkitemIds(array $newWorkitemIds = null)
    {
        $this->newWorkitemIds = $newWorkitemIds;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     * @return \SForce\Wsdl\ProcessResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }
}
