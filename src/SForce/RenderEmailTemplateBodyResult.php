<?php

namespace SForce\Wsdl;

class RenderEmailTemplateBodyResult
{
    /**
     * @var RenderEmailTemplateError[]
     */
    protected $errors = null;

    /**
     * @var string
     */
    protected $mergedBody = null;

    /**
     * @var boolean
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
     * @return RenderEmailTemplateError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param RenderEmailTemplateError[] $errors
     * @return \SForce\Wsdl\RenderEmailTemplateBodyResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return string
     */
    public function getMergedBody()
    {
        return $this->mergedBody;
    }

    /**
     * @param string $mergedBody
     * @return \SForce\Wsdl\RenderEmailTemplateBodyResult
     */
    public function setMergedBody($mergedBody)
    {
        $this->mergedBody = $mergedBody;
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
     * @return \SForce\Wsdl\RenderEmailTemplateBodyResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }
}
