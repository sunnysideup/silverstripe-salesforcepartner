<?php

namespace SForce\Wsdl;

class ProcessSubmitRequest extends ProcessRequest
{

    /**
     * @var ID $objectId
     */
    protected $objectId = null;

    /**
     * @var ID $submitterId
     */
    protected $submitterId = null;

    /**
     * @var string $processDefinitionNameOrId
     */
    protected $processDefinitionNameOrId = null;

    /**
     * @var boolean $skipEntryCriteria
     */
    protected $skipEntryCriteria = null;

    /**
     * @param ID $objectId
     */
    public function __construct($objectId = null)
    {
      parent::__construct();
      $this->objectId = $objectId;
    }

    /**
     * @return ID
     */
    public function getObjectId()
    {
      return $this->objectId;
    }

    /**
     * @param ID $objectId
     * @return \SForce\Wsdl\ProcessSubmitRequest
     */
    public function setObjectId($objectId)
    {
      $this->objectId = $objectId;
      return $this;
    }

    /**
     * @return ID
     */
    public function getSubmitterId()
    {
      return $this->submitterId;
    }

    /**
     * @param ID $submitterId
     * @return \SForce\Wsdl\ProcessSubmitRequest
     */
    public function setSubmitterId($submitterId)
    {
      $this->submitterId = $submitterId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessDefinitionNameOrId()
    {
      return $this->processDefinitionNameOrId;
    }

    /**
     * @param string $processDefinitionNameOrId
     * @return \SForce\Wsdl\ProcessSubmitRequest
     */
    public function setProcessDefinitionNameOrId($processDefinitionNameOrId)
    {
      $this->processDefinitionNameOrId = $processDefinitionNameOrId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipEntryCriteria()
    {
      return $this->skipEntryCriteria;
    }

    /**
     * @param boolean $skipEntryCriteria
     * @return \SForce\Wsdl\ProcessSubmitRequest
     */
    public function setSkipEntryCriteria($skipEntryCriteria)
    {
      $this->skipEntryCriteria = $skipEntryCriteria;
      return $this;
    }

}
