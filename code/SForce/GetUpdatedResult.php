<?php

namespace SForce\Wsdl;

class GetUpdatedResult
{

    /**
     * @var ID[] $ids
     */
    protected $ids = null;

    /**
     * @var \DateTime $latestDateCovered
     */
    protected $latestDateCovered = null;

    /**
     * @param \DateTime $latestDateCovered
     */
    public function __construct(\DateTime $latestDateCovered = null)
    {
      $this->latestDateCovered = $latestDateCovered ? $latestDateCovered->format(\DateTime::ATOM) : null;
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
     * @return \SForce\Wsdl\GetUpdatedResult
     */
    public function setIds(array $ids = null)
    {
      $this->ids = $ids;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestDateCovered()
    {
      if ($this->latestDateCovered == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->latestDateCovered);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $latestDateCovered
     * @return \SForce\Wsdl\GetUpdatedResult
     */
    public function setLatestDateCovered(\DateTime $latestDateCovered)
    {
      $this->latestDateCovered = $latestDateCovered->format(\DateTime::ATOM);
      return $this;
    }

}
