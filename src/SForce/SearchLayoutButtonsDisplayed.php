<?php

namespace SForce\Wsdl;

class SearchLayoutButtonsDisplayed
{

    /**
     * @var boolean $applicable
     */
    protected $applicable = null;

    /**
     * @var SearchLayoutButton[] $buttons
     */
    protected $buttons = null;

    /**
     * @param boolean $applicable
     */
    public function __construct($applicable = null)
    {
      $this->applicable = $applicable;
    }

    /**
     * @return boolean
     */
    public function getApplicable()
    {
      return $this->applicable;
    }

    /**
     * @param boolean $applicable
     * @return \SForce\Wsdl\SearchLayoutButtonsDisplayed
     */
    public function setApplicable($applicable)
    {
      $this->applicable = $applicable;
      return $this;
    }

    /**
     * @return SearchLayoutButton[]
     */
    public function getButtons()
    {
      return $this->buttons;
    }

    /**
     * @param SearchLayoutButton[] $buttons
     * @return \SForce\Wsdl\SearchLayoutButtonsDisplayed
     */
    public function setButtons(array $buttons = null)
    {
      $this->buttons = $buttons;
      return $this;
    }

}
