<?php

namespace SForce\Wsdl;

class ActionOverride
{

    /**
     * @var string $formFactor
     */
    protected $formFactor = null;

    /**
     * @var boolean $isAvailableInTouch
     */
    protected $isAvailableInTouch = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ID $pageId
     */
    protected $pageId = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param string $formFactor
     * @param boolean $isAvailableInTouch
     * @param string $name
     * @param ID $pageId
     */
    public function __construct($formFactor = null, $isAvailableInTouch = null, $name = null, $pageId = null)
    {
      $this->formFactor = $formFactor;
      $this->isAvailableInTouch = $isAvailableInTouch;
      $this->name = $name;
      $this->pageId = $pageId;
    }

    /**
     * @return string
     */
    public function getFormFactor()
    {
      return $this->formFactor;
    }

    /**
     * @param string $formFactor
     * @return \SForce\Wsdl\ActionOverride
     */
    public function setFormFactor($formFactor)
    {
      $this->formFactor = $formFactor;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAvailableInTouch()
    {
      return $this->isAvailableInTouch;
    }

    /**
     * @param boolean $isAvailableInTouch
     * @return \SForce\Wsdl\ActionOverride
     */
    public function setIsAvailableInTouch($isAvailableInTouch)
    {
      $this->isAvailableInTouch = $isAvailableInTouch;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\ActionOverride
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ID
     */
    public function getPageId()
    {
      return $this->pageId;
    }

    /**
     * @param ID $pageId
     * @return \SForce\Wsdl\ActionOverride
     */
    public function setPageId($pageId)
    {
      $this->pageId = $pageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \SForce\Wsdl\ActionOverride
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
