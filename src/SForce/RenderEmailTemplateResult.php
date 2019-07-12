<?php

namespace SForce\Wsdl;

class RenderEmailTemplateResult
{

    /**
     * @var RenderEmailTemplateBodyResult[] $bodyResults
     */
    protected $bodyResults = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @param boolean $success
     */
    public function __construct($success = null)
    {
      $this->success = $success;
    }

    /**
     * @return RenderEmailTemplateBodyResult[]
     */
    public function getBodyResults()
    {
      return $this->bodyResults;
    }

    /**
     * @param RenderEmailTemplateBodyResult[] $bodyResults
     * @return \SForce\Wsdl\RenderEmailTemplateResult
     */
    public function setBodyResults(array $bodyResults = null)
    {
      $this->bodyResults = $bodyResults;
      return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \SForce\Wsdl\RenderEmailTemplateResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->success;
    }

    /**
     * @param boolean $success
     * @return \SForce\Wsdl\RenderEmailTemplateResult
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
