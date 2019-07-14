<?php

namespace SForce\Wsdl;

class GetDeletedResult
{
    /**
     * @var DeletedRecord[]
     */
    protected $deletedRecords = null;

    /**
     * @var \DateTime
     */
    protected $earliestDateAvailable = null;

    /**
     * @var \DateTime
     */
    protected $latestDateCovered = null;

    /**
     * @param \DateTime $earliestDateAvailable
     * @param \DateTime $latestDateCovered
     */
    public function __construct(\DateTime $earliestDateAvailable = null, \DateTime $latestDateCovered = null)
    {
        $this->earliestDateAvailable = $earliestDateAvailable ? $earliestDateAvailable->format(\DateTime::ATOM) : null;
        $this->latestDateCovered = $latestDateCovered ? $latestDateCovered->format(\DateTime::ATOM) : null;
    }

    /**
     * @return DeletedRecord[]
     */
    public function getDeletedRecords()
    {
        return $this->deletedRecords;
    }

    /**
     * @param DeletedRecord[] $deletedRecords
     * @return \SForce\Wsdl\GetDeletedResult
     */
    public function setDeletedRecords(array $deletedRecords = null)
    {
        $this->deletedRecords = $deletedRecords;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestDateAvailable()
    {
        if ($this->earliestDateAvailable === null) {
            return null;
        }
        try {
            return new \DateTime($this->earliestDateAvailable);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param \DateTime $earliestDateAvailable
     * @return \SForce\Wsdl\GetDeletedResult
     */
    public function setEarliestDateAvailable(\DateTime $earliestDateAvailable)
    {
        $this->earliestDateAvailable = $earliestDateAvailable->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestDateCovered()
    {
        if ($this->latestDateCovered === null) {
            return null;
        }
        try {
            return new \DateTime($this->latestDateCovered);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param \DateTime $latestDateCovered
     * @return \SForce\Wsdl\GetDeletedResult
     */
    public function setLatestDateCovered(\DateTime $latestDateCovered)
    {
        $this->latestDateCovered = $latestDateCovered->format(\DateTime::ATOM);
        return $this;
    }
}
