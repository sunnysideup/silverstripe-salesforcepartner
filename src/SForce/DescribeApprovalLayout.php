<?php

namespace SForce\Wsdl;

class DescribeApprovalLayout
{

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var DescribeLayoutItem[] $layoutItems
     */
    protected $layoutItems = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param ID $id
     * @param string $label
     * @param DescribeLayoutItem[] $layoutItems
     * @param string $name
     */
    public function __construct($id = null, $label = null, array $layoutItems = null, $name = null)
    {
      $this->id = $id;
      $this->label = $label;
      $this->layoutItems = $layoutItems;
      $this->name = $name;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \SForce\Wsdl\DescribeApprovalLayout
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \SForce\Wsdl\DescribeApprovalLayout
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return DescribeLayoutItem[]
     */
    public function getLayoutItems()
    {
      return $this->layoutItems;
    }

    /**
     * @param DescribeLayoutItem[] $layoutItems
     * @return \SForce\Wsdl\DescribeApprovalLayout
     */
    public function setLayoutItems(array $layoutItems)
    {
      $this->layoutItems = $layoutItems;
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
     * @return \SForce\Wsdl\DescribeApprovalLayout
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
