<?php

namespace SForce\Wsdl;

class EmailHeader
{

    /**
     * @var boolean $triggerAutoResponseEmail
     */
    protected $triggerAutoResponseEmail = null;

    /**
     * @var boolean $triggerOtherEmail
     */
    protected $triggerOtherEmail = null;

    /**
     * @var boolean $triggerUserEmail
     */
    protected $triggerUserEmail = null;

    /**
     * @param boolean $triggerAutoResponseEmail
     * @param boolean $triggerOtherEmail
     * @param boolean $triggerUserEmail
     */
    public function __construct($triggerAutoResponseEmail = null, $triggerOtherEmail = null, $triggerUserEmail = null)
    {
      $this->triggerAutoResponseEmail = $triggerAutoResponseEmail;
      $this->triggerOtherEmail = $triggerOtherEmail;
      $this->triggerUserEmail = $triggerUserEmail;
    }

    /**
     * @return boolean
     */
    public function getTriggerAutoResponseEmail()
    {
      return $this->triggerAutoResponseEmail;
    }

    /**
     * @param boolean $triggerAutoResponseEmail
     * @return \SForce\Wsdl\EmailHeader
     */
    public function setTriggerAutoResponseEmail($triggerAutoResponseEmail)
    {
      $this->triggerAutoResponseEmail = $triggerAutoResponseEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTriggerOtherEmail()
    {
      return $this->triggerOtherEmail;
    }

    /**
     * @param boolean $triggerOtherEmail
     * @return \SForce\Wsdl\EmailHeader
     */
    public function setTriggerOtherEmail($triggerOtherEmail)
    {
      $this->triggerOtherEmail = $triggerOtherEmail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTriggerUserEmail()
    {
      return $this->triggerUserEmail;
    }

    /**
     * @param boolean $triggerUserEmail
     * @return \SForce\Wsdl\EmailHeader
     */
    public function setTriggerUserEmail($triggerUserEmail)
    {
      $this->triggerUserEmail = $triggerUserEmail;
      return $this;
    }

}
