<?php

namespace SForce\Wsdl;

class RelatedContent
{
    /**
     * @var DescribeRelatedContentItem[]
     */
    protected $relatedContentItems = null;

    /**
     * @param DescribeRelatedContentItem[] $relatedContentItems
     */
    public function __construct(array $relatedContentItems = null)
    {
        $this->relatedContentItems = $relatedContentItems;
    }

    /**
     * @return DescribeRelatedContentItem[]
     */
    public function getRelatedContentItems()
    {
        return $this->relatedContentItems;
    }

    /**
     * @param DescribeRelatedContentItem[] $relatedContentItems
     * @return \SForce\Wsdl\RelatedContent
     */
    public function setRelatedContentItems(array $relatedContentItems)
    {
        $this->relatedContentItems = $relatedContentItems;
        return $this;
    }
}
