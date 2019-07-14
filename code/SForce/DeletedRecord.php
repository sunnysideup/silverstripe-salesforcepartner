<?php

namespace SForce\Wsdl;

class DeletedRecord
{
    /**
     * @var \DateTime
     */
    protected $deletedDate = null;

    /**
     * @var ID
     */
    protected $id = null;

    /**
     * @param \DateTime $deletedDate
     * @param ID $id
     */
    public function __construct(\DateTime $deletedDate = null, $id = null)
    {
        $this->deletedDate = $deletedDate ? $deletedDate->format(\DateTime::ATOM) : null;
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        if ($this->deletedDate === null) {
            return null;
        }
        try {
            return new \DateTime($this->deletedDate);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param \DateTime $deletedDate
     * @return \SForce\Wsdl\DeletedRecord
     */
    public function setDeletedDate(\DateTime $deletedDate)
    {
        $this->deletedDate = $deletedDate->format(\DateTime::ATOM);
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
     * @return \SForce\Wsdl\DeletedRecord
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
