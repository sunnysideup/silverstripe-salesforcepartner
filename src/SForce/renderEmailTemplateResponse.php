<?php

namespace SForce\Wsdl;

class renderEmailTemplateResponse
{

    /**
     * @var RenderEmailTemplateResult $result
     */
    protected $result = null;

    /**
     * @param RenderEmailTemplateResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return RenderEmailTemplateResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param RenderEmailTemplateResult $result
     * @return \SForce\Wsdl\renderEmailTemplateResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
