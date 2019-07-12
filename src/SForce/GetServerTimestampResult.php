<?php

namespace SForce\Wsdl;

class GetServerTimestampResult
{

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @param \DateTime $timestamp
     */
    public function __construct(\DateTime $timestamp = null)
    {
      $this->timestamp = $timestamp ? $timestamp->format(\DateTime::ATOM) : null;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timestamp
     * @return \SForce\Wsdl\GetServerTimestampResult
     */
    public function setTimestamp(\DateTime $timestamp)
    {
      $this->timestamp = $timestamp->format(\DateTime::ATOM);
      return $this;
    }

}
