<?php

namespace SForce\Wsdl;

class findDuplicatesResponse
{

    /**
     * @var FindDuplicatesResult $result
     */
    protected $result = null;

    /**
     * @param FindDuplicatesResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return FindDuplicatesResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param FindDuplicatesResult $result
     * @return \SForce\Wsdl\findDuplicatesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
