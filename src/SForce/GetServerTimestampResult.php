<?php

namespace SForce\Wsdl;

class GetServerTimestampResult
{
    /**
     * @var \DateTime
     */
    protected $timestamp = null;

    /**
     * @param \DateTime $timestamp
     */
    public function __construct(\DateTime $timestamp = null)
    {

      /**
       * ### @@@@ START REPLACEMENT @@@@ ###
       * WHY: upgrade to SS4
       * OLD: ->format( (case sensitive)
       * NEW: ->format( (COMPLEX)
       * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
       * ### @@@@ STOP REPLACEMENT @@@@ ###
       */
        $this->timestamp = $timestamp ? $timestamp->format(\DateTime::ATOM) : null;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        if ($this->timestamp === null) {
            return null;
        }
        try {
            return new \DateTime($this->timestamp);
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param \DateTime $timestamp
     * @return \SForce\Wsdl\GetServerTimestampResult
     */
    public function setTimestamp(\DateTime $timestamp)
    {

      /**
       * ### @@@@ START REPLACEMENT @@@@ ###
       * WHY: upgrade to SS4
       * OLD: ->format( (case sensitive)
       * NEW: ->format( (COMPLEX)
       * EXP: If this is a PHP Date format call then this needs to be changed to new Date formatting system. (see http://userguide.icu-project.org/formatparse/datetime)
       * ### @@@@ STOP REPLACEMENT @@@@ ###
       */
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
        return $this;
    }
}
