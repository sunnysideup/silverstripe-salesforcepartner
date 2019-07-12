<?php

namespace SForce\Wsdl;

class DescribeLayoutFeedFilter
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var FeedLayoutFilterType $type
     */
    protected $type = null;

    /**
     * @param string $label
     * @param string $name
     * @param FeedLayoutFilterType $type
     */
    public function __construct($label = null, $name = null, $type = null)
    {
      $this->label = $label;
      $this->name = $name;
      $this->type = $type;
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
     * @return \SForce\Wsdl\DescribeLayoutFeedFilter
     */
    public function setLabel($label)
    {
      $this->label = $label;
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
     * @return \SForce\Wsdl\DescribeLayoutFeedFilter
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return FeedLayoutFilterType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param FeedLayoutFilterType $type
     * @return \SForce\Wsdl\DescribeLayoutFeedFilter
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
