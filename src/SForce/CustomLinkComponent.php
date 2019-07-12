<?php

namespace SForce\Wsdl;

class CustomLinkComponent extends DescribeLayoutComponent
{
    /**
     * @var DescribeLayoutButton
     */
    protected $customLink = null;

    /**
     * @param int $displayLines
     * @param int $tabOrder
     * @param layoutComponentType $type
     * @param DescribeLayoutButton $customLink
     */
    public function __construct($displayLines = null, $tabOrder = null, $type = null, $customLink = null)
    {
        parent::__construct($displayLines, $tabOrder, $type);
        $this->customLink = $customLink;
    }

    /**
     * @return DescribeLayoutButton
     */
    public function getCustomLink()
    {
        return $this->customLink;
    }

    /**
     * @param DescribeLayoutButton $customLink
     * @return \SForce\Wsdl\CustomLinkComponent
     */
    public function setCustomLink($customLink)
    {
        $this->customLink = $customLink;
        return $this;
    }
}
