<?php

namespace SForce\Wsdl;

class renderEmailTemplate
{

    /**
     * @var RenderEmailTemplateRequest $renderRequests
     */
    protected $renderRequests = null;

    /**
     * @param RenderEmailTemplateRequest $renderRequests
     */
    public function __construct($renderRequests = null)
    {
      $this->renderRequests = $renderRequests;
    }

    /**
     * @return RenderEmailTemplateRequest
     */
    public function getRenderRequests()
    {
      return $this->renderRequests;
    }

    /**
     * @param RenderEmailTemplateRequest $renderRequests
     * @return \SForce\Wsdl\renderEmailTemplate
     */
    public function setRenderRequests($renderRequests)
    {
      $this->renderRequests = $renderRequests;
      return $this;
    }

}
