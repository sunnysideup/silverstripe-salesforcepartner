<?php

namespace SForce\Wsdl;

class renderStoredEmailTemplateResponse
{

    /**
     * @var RenderStoredEmailTemplateResult $result
     */
    protected $result = null;

    /**
     * @param RenderStoredEmailTemplateResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return RenderStoredEmailTemplateResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param RenderStoredEmailTemplateResult $result
     * @return \SForce\Wsdl\renderStoredEmailTemplateResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
