<?php

namespace SForce\Wsdl;

class PerformQuickActionResult
{

    /**
     * @var ID $contextId
     */
    protected $contextId = null;

    /**
     * @var boolean $created
     */
    protected $created = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var ID[] $feedItemIds
     */
    protected $feedItemIds = null;

    /**
     * @var ID[] $ids
     */
    protected $ids = null;

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @var string $successMessage
     */
    protected $successMessage = null;

    /**
     * @param boolean $created
     * @param boolean $success
     */
    public function __construct($created = null, $success = null)
    {
      $this->created = $created;
      $this->success = $success;
    }

    /**
     * @return ID
     */
    public function getContextId()
    {
      return $this->contextId;
    }

    /**
     * @param ID $contextId
     * @return \SForce\Wsdl\PerformQuickActionResult
     */
    public function setContextId($contextId)
    {
      $this->contextId = $contextId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param boolean $created
     * @return \SForce\Wsdl\PerformQuickActionResult
     */
    public function setCreated($created)
    {
      $this->created = $created;
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
     * @return \SForce\Wsdl\PerformQuickActionResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

    /**
     * @return ID[]
     */
    public function getFeedItemIds()
    {
      return $this->feedItemIds;
    }

    /**
     * @param ID[] $feedItemIds
     * @return \SForce\Wsdl\PerformQuickActionResult
     */
    public function setFeedItemIds(array $feedItemIds = null)
    {
      $this->feedItemIds = $feedItemIds;
      return $this;
    }

    /**
     * @return ID[]
     */
    public function getIds()
    {
      return $this->ids;
    }

    /**
     * @param ID[] $ids
     * @return \SForce\Wsdl\PerformQuickActionResult
     */
    public function setIds(array $ids = null)
    {
      $this->ids = $ids;
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
     * @return \SForce\Wsdl\PerformQuickActionResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuccessMessage()
    {
      return $this->successMessage;
    }

    /**
     * @param string $successMessage
     * @return \SForce\Wsdl\PerformQuickActionResult
     */
    public function setSuccessMessage($successMessage)
    {
      $this->successMessage = $successMessage;
      return $this;
    }

}
