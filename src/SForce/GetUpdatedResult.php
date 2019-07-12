<?php

namespace SForce\Wsdl;

class GetUpdatedResult
{
    /**
     * @var ID[]
     */
    protected $ids = null;

    /**
     * @var \DateTime
     */
    protected $latestDateCovered = null;

    /**
     * @param \DateTime $latestDateCovered
     */
    public function __construct(\DateTime $latestDateCovered = null)
    {

      /**
       * ### @@@@ START REPLACEMENT @@@@ ###
       * WHY: upgrade to SS4
       * OLD: ->format( (case sensitive)
       * NEW: ->format( (COMPLEX)
       * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
       * ### @@@@ STOP REPLACEMENT @@@@ ###
       */
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
     * @return \SForce\Wsdl\GetUpdatedResult
     */
    public function setLatestDateCovered(\DateTime $latestDateCovered)
    {

      /**
       * ### @@@@ START REPLACEMENT @@@@ ###
       * WHY: upgrade to SS4
       * OLD: ->format( (case sensitive)
       * NEW: ->format( (COMPLEX)
       * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
       * ### @@@@ STOP REPLACEMENT @@@@ ###
       */
        $this->latestDateCovered = $latestDateCovered->format(\DateTime::ATOM);
        return $this;
    }
}
