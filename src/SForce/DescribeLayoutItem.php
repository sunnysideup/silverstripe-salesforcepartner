<?php

namespace SForce\Wsdl;

class DescribeLayoutItem
{

    /**
     * @var boolean $editableForNew
     */
    protected $editableForNew = null;

    /**
     * @var boolean $editableForUpdate
     */
    protected $editableForUpdate = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var DescribeLayoutComponent[] $layoutComponents
     */
    protected $layoutComponents = null;

    /**
     * @var boolean $placeholder
     */
    protected $placeholder = null;

    /**
     * @var boolean $required
     */
    protected $required = null;

    /**
     * @param boolean $editableForNew
     * @param boolean $editableForUpdate
     * @param boolean $placeholder
     * @param boolean $required
     */
    public function __construct($editableForNew = null, $editableForUpdate = null, $placeholder = null, $required = null)
    {
      $this->editableForNew = $editableForNew;
      $this->editableForUpdate = $editableForUpdate;
      $this->placeholder = $placeholder;
      $this->required = $required;
    }

    /**
     * @return boolean
     */
    public function getEditableForNew()
    {
      return $this->editableForNew;
    }

    /**
     * @param boolean $editableForNew
     * @return \SForce\Wsdl\DescribeLayoutItem
     */
    public function setEditableForNew($editableForNew)
    {
      $this->editableForNew = $editableForNew;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEditableForUpdate()
    {
      return $this->editableForUpdate;
    }

    /**
     * @param boolean $editableForUpdate
     * @return \SForce\Wsdl\DescribeLayoutItem
     */
    public function setEditableForUpdate($editableForUpdate)
    {
      $this->editableForUpdate = $editableForUpdate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \SForce\Wsdl\DescribeLayoutItem
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return DescribeLayoutComponent[]
     */
    public function getLayoutComponents()
    {
      return $this->layoutComponents;
    }

    /**
     * @param DescribeLayoutComponent[] $layoutComponents
     * @return \SForce\Wsdl\DescribeLayoutItem
     */
    public function setLayoutComponents(array $layoutComponents = null)
    {
      $this->layoutComponents = $layoutComponents;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPlaceholder()
    {
      return $this->placeholder;
    }

    /**
     * @param boolean $placeholder
     * @return \SForce\Wsdl\DescribeLayoutItem
     */
    public function setPlaceholder($placeholder)
    {
      $this->placeholder = $placeholder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequired()
    {
      return $this->required;
    }

    /**
     * @param boolean $required
     * @return \SForce\Wsdl\DescribeLayoutItem
     */
    public function setRequired($required)
    {
      $this->required = $required;
      return $this;
    }

}
