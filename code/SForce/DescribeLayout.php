<?php

namespace SForce\Wsdl;

class DescribeLayout
{
    /**
     * @var DescribeLayoutButtonSection
     */
    protected $buttonLayoutSection = null;

    /**
     * @var DescribeLayoutSection[]
     */
    protected $detailLayoutSections = null;

    /**
     * @var DescribeLayoutSection[]
     */
    protected $editLayoutSections = null;

    /**
     * @var DescribeLayoutFeedView
     */
    protected $feedView = null;

    /**
     * @var DescribeLayoutSection
     */
    protected $highlightsPanelLayoutSection = null;

    /**
     * @var ID
     */
    protected $id = null;

    /**
     * @var DescribeQuickActionListResult
     */
    protected $quickActionList = null;

    /**
     * @var RelatedContent
     */
    protected $relatedContent = null;

    /**
     * @var RelatedList[]
     */
    protected $relatedLists = null;

    /**
     * @var DescribeLayoutSaveOption[]
     */
    protected $saveOptions = null;

    public function __construct()
    {
    }

    /**
     * @return DescribeLayoutButtonSection
     */
    public function getButtonLayoutSection()
    {
        return $this->buttonLayoutSection;
    }

    /**
     * @param DescribeLayoutButtonSection $buttonLayoutSection
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setButtonLayoutSection($buttonLayoutSection)
    {
        $this->buttonLayoutSection = $buttonLayoutSection;
        return $this;
    }

    /**
     * @return DescribeLayoutSection[]
     */
    public function getDetailLayoutSections()
    {
        return $this->detailLayoutSections;
    }

    /**
     * @param DescribeLayoutSection[] $detailLayoutSections
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setDetailLayoutSections(array $detailLayoutSections = null)
    {
        $this->detailLayoutSections = $detailLayoutSections;
        return $this;
    }

    /**
     * @return DescribeLayoutSection[]
     */
    public function getEditLayoutSections()
    {
        return $this->editLayoutSections;
    }

    /**
     * @param DescribeLayoutSection[] $editLayoutSections
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setEditLayoutSections(array $editLayoutSections = null)
    {
        $this->editLayoutSections = $editLayoutSections;
        return $this;
    }

    /**
     * @return DescribeLayoutFeedView
     */
    public function getFeedView()
    {
        return $this->feedView;
    }

    /**
     * @param DescribeLayoutFeedView $feedView
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setFeedView($feedView)
    {
        $this->feedView = $feedView;
        return $this;
    }

    /**
     * @return DescribeLayoutSection
     */
    public function getHighlightsPanelLayoutSection()
    {
        return $this->highlightsPanelLayoutSection;
    }

    /**
     * @param DescribeLayoutSection $highlightsPanelLayoutSection
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setHighlightsPanelLayoutSection($highlightsPanelLayoutSection)
    {
        $this->highlightsPanelLayoutSection = $highlightsPanelLayoutSection;
        return $this;
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
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return DescribeQuickActionListResult
     */
    public function getQuickActionList()
    {
        return $this->quickActionList;
    }

    /**
     * @param DescribeQuickActionListResult $quickActionList
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setQuickActionList($quickActionList)
    {
        $this->quickActionList = $quickActionList;
        return $this;
    }

    /**
     * @return RelatedContent
     */
    public function getRelatedContent()
    {
        return $this->relatedContent;
    }

    /**
     * @param RelatedContent $relatedContent
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setRelatedContent($relatedContent)
    {
        $this->relatedContent = $relatedContent;
        return $this;
    }

    /**
     * @return RelatedList[]
     */
    public function getRelatedLists()
    {
        return $this->relatedLists;
    }

    /**
     * @param RelatedList[] $relatedLists
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setRelatedLists(array $relatedLists = null)
    {
        $this->relatedLists = $relatedLists;
        return $this;
    }

    /**
     * @return DescribeLayoutSaveOption[]
     */
    public function getSaveOptions()
    {
        return $this->saveOptions;
    }

    /**
     * @param DescribeLayoutSaveOption[] $saveOptions
     * @return \SForce\Wsdl\DescribeLayout
     */
    public function setSaveOptions(array $saveOptions = null)
    {
        $this->saveOptions = $saveOptions;
        return $this;
    }
}
