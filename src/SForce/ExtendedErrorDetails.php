<?php

namespace SForce\Wsdl;

class ExtendedErrorDetails
{

    /**
     * @var ExtendedErrorCode $extendedErrorCode
     */
    protected $extendedErrorCode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ExtendedErrorCode $extendedErrorCode
     * @param string $any
     */
    public function __construct($extendedErrorCode = null, $any = null)
    {
      $this->extendedErrorCode = $extendedErrorCode;
      $this->any = $any;
    }

    /**
     * @return ExtendedErrorCode
     */
    public function getExtendedErrorCode()
    {
      return $this->extendedErrorCode;
    }

    /**
     * @param ExtendedErrorCode $extendedErrorCode
     * @return \SForce\Wsdl\ExtendedErrorDetails
     */
    public function setExtendedErrorCode($extendedErrorCode)
    {
      $this->extendedErrorCode = $extendedErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \SForce\Wsdl\ExtendedErrorDetails
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
