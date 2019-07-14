<?php

namespace SForce\Wsdl;

class ChangeEventHeader
{
    /**
     * @var string
     */
    protected $entityName = null;

    /**
     * @var string[]
     */
    protected $recordIds = null;

    /**
     * @var int
     */
    protected $commitTimestamp = null;

    /**
     * @var int
     */
    protected $commitNumber = null;

    /**
     * @var string
     */
    protected $commitUser = null;

    /**
     * @var string[]
     */
    protected $diffFields = null;

    /**
     * @var changeEventType
     */
    protected $changeType = null;

    /**
     * @var string
     */
    protected $changeOrigin = null;

    /**
     * @var string
     */
    protected $transactionKey = null;

    /**
     * @var int
     */
    protected $sequenceNumber = null;

    /**
     * @var string[]
     */
    protected $nulledFields = null;

    /**
     * @param string $entityName
     * @param string[] $recordIds
     * @param int $commitTimestamp
     * @param int $commitNumber
     * @param string $commitUser
     * @param changeEventType $changeType
     * @param string $changeOrigin
     * @param string $transactionKey
     * @param int $sequenceNumber
     */
    public function __construct($entityName = null, array $recordIds = null, $commitTimestamp = null, $commitNumber = null, $commitUser = null, $changeType = null, $changeOrigin = null, $transactionKey = null, $sequenceNumber = null)
    {
        $this->entityName = $entityName;
        $this->recordIds = $recordIds;
        $this->commitTimestamp = $commitTimestamp;
        $this->commitNumber = $commitNumber;
        $this->commitUser = $commitUser;
        $this->changeType = $changeType;
        $this->changeOrigin = $changeOrigin;
        $this->transactionKey = $transactionKey;
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecordIds()
    {
        return $this->recordIds;
    }

    /**
     * @param string[] $recordIds
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setRecordIds(array $recordIds)
    {
        $this->recordIds = $recordIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommitTimestamp()
    {
        return $this->commitTimestamp;
    }

    /**
     * @param int $commitTimestamp
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setCommitTimestamp($commitTimestamp)
    {
        $this->commitTimestamp = $commitTimestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommitNumber()
    {
        return $this->commitNumber;
    }

    /**
     * @param int $commitNumber
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setCommitNumber($commitNumber)
    {
        $this->commitNumber = $commitNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommitUser()
    {
        return $this->commitUser;
    }

    /**
     * @param string $commitUser
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setCommitUser($commitUser)
    {
        $this->commitUser = $commitUser;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDiffFields()
    {
        return $this->diffFields;
    }

    /**
     * @param string[] $diffFields
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setDiffFields(array $diffFields = null)
    {
        $this->diffFields = $diffFields;
        return $this;
    }

    /**
     * @return changeEventType
     */
    public function getChangeType()
    {
        return $this->changeType;
    }

    /**
     * @param changeEventType $changeType
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setChangeType($changeType)
    {
        $this->changeType = $changeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getChangeOrigin()
    {
        return $this->changeOrigin;
    }

    /**
     * @param string $changeOrigin
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setChangeOrigin($changeOrigin)
    {
        $this->changeOrigin = $changeOrigin;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionKey()
    {
        return $this->transactionKey;
    }

    /**
     * @param string $transactionKey
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setTransactionKey($transactionKey)
    {
        $this->transactionKey = $transactionKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param int $sequenceNumber
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNulledFields()
    {
        return $this->nulledFields;
    }

    /**
     * @param string[] $nulledFields
     * @return \SForce\Wsdl\ChangeEventHeader
     */
    public function setNulledFields(array $nulledFields = null)
    {
        $this->nulledFields = $nulledFields;
        return $this;
    }
}
