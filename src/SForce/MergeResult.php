<?php

namespace SForce\Wsdl;

class MergeResult
{
    /**
     * @var Error[]
     */
    protected $errors = null;

    /**
     * @var ID
     */
    protected $id = null;

    /**
     * @var ID[]
     */
    protected $mergedRecordIds = null;

    /**
     * @var boolean
     */
    protected $success = null;

    /**
     * @var ID[]
     */
    protected $updatedRelatedIds = null;

    /**
     * @param boolean $success
     */
    public function __construct($success = null)
    {
        $this->success = $success;
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
     * @return \SForce\Wsdl\MergeResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ID $id
     * @return \SForce\Wsdl\MergeResult
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getMergedRecordIds()
    {
        return $this->mergedRecordIds;
    }

    /**
     * @param ID[] $mergedRecordIds
     * @return \SForce\Wsdl\MergeResult
     */
    public function setMergedRecordIds(array $mergedRecordIds = null)
    {
        $this->mergedRecordIds = $mergedRecordIds;
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
     * @return \SForce\Wsdl\MergeResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return ID[]
     */
    public function getUpdatedRelatedIds()
    {
        return $this->updatedRelatedIds;
    }

    /**
     * @param ID[] $updatedRelatedIds
     * @return \SForce\Wsdl\MergeResult
     */
    public function setUpdatedRelatedIds(array $updatedRelatedIds = null)
    {
        $this->updatedRelatedIds = $updatedRelatedIds;
        return $this;
    }
}
