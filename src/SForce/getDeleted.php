<?php

namespace SForce\Wsdl;

class getDeleted
{
    /**
     * @var string
     */
    protected $sObjectType = null;

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    /**
     * @var \DateTime
     */
    protected $endDate = null;

    /**
     * @param string $sObjectType
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     */
    public function __construct($sObjectType = null, \DateTime $startDate = null, \DateTime $endDate = null)
    {
        $this->sObjectType = $sObjectType;

        /**
         * ### @@@@ START REPLACEMENT @@@@ ###
         * WHY: upgrade to SS4
         * OLD: ->format( (case sensitive)
         * NEW: ->format( (COMPLEX)
         * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
         * ### @@@@ STOP REPLACEMENT @@@@ ###
         */
        $this->startDate = $startDate ? $startDate->format(\DateTime::ATOM) : null;

        /**
         * ### @@@@ START REPLACEMENT @@@@ ###
         * WHY: upgrade to SS4
         * OLD: ->format( (case sensitive)
         * NEW: ->format( (COMPLEX)
         * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
         * ### @@@@ STOP REPLACEMENT @@@@ ###
         */
        $this->endDate = $endDate ? $endDate->format(\DateTime::ATOM) : null;
    }

    /**
     * @return string
     */
    public function getSObjectType()
    {
        return $this->sObjectType;
    }

    /**
     * @param string $sObjectType
     * @return \SForce\Wsdl\getDeleted
     */
    public function setSObjectType($sObjectType)
    {
        $this->sObjectType = $sObjectType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->startDate === null) {
            return null;
        }
        try {
            return new \DateTime($this->startDate);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param \DateTime $startDate
     * @return \SForce\Wsdl\getDeleted
     */
    public function setStartDate(\DateTime $startDate)
    {

      /**
       * ### @@@@ START REPLACEMENT @@@@ ###
       * WHY: upgrade to SS4
       * OLD: ->format( (case sensitive)
       * NEW: ->format( (COMPLEX)
       * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
       * ### @@@@ STOP REPLACEMENT @@@@ ###
       */
        $this->startDate = $startDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->endDate === null) {
            return null;
        }
        try {
            return new \DateTime($this->endDate);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param \DateTime $endDate
     * @return \SForce\Wsdl\getDeleted
     */
    public function setEndDate(\DateTime $endDate)
    {

      /**
       * ### @@@@ START REPLACEMENT @@@@ ###
       * WHY: upgrade to SS4
       * OLD: ->format( (case sensitive)
       * NEW: ->format( (COMPLEX)
       * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
       * ### @@@@ STOP REPLACEMENT @@@@ ###
       */
        $this->endDate = $endDate->format(\DateTime::ATOM);
        return $this;
    }
}
