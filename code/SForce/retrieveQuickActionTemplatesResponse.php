<?php

namespace SForce\Wsdl;

class retrieveQuickActionTemplatesResponse
{

    /**
     * @var QuickActionTemplateResult $result
     */
    protected $result = null;

    /**
     * @param QuickActionTemplateResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return QuickActionTemplateResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param QuickActionTemplateResult $result
     * @return \SForce\Wsdl\retrieveQuickActionTemplatesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
