<?php

namespace SForce\Wsdl;

class renderStoredEmailTemplate
{

    /**
     * @var RenderStoredEmailTemplateRequest $request
     */
    protected $request = null;

    /**
     * @param RenderStoredEmailTemplateRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return RenderStoredEmailTemplateRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RenderStoredEmailTemplateRequest $request
     * @return \SForce\Wsdl\renderStoredEmailTemplate
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
