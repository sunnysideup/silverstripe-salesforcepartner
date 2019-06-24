<?php

namespace SForce\Wsdl;

class DescribeSObjectResult
{

    /**
     * @var ActionOverride[] $actionOverrides
     */
    protected $actionOverrides = null;

    /**
     * @var boolean $activateable
     */
    protected $activateable = null;

    /**
     * @var ChildRelationship[] $childRelationships
     */
    protected $childRelationships = null;

    /**
     * @var boolean $compactLayoutable
     */
    protected $compactLayoutable = null;

    /**
     * @var boolean $createable
     */
    protected $createable = null;

    /**
     * @var boolean $custom
     */
    protected $custom = null;

    /**
     * @var boolean $customSetting
     */
    protected $customSetting = null;

    /**
     * @var boolean $dataTranslationEnabled
     */
    protected $dataTranslationEnabled = null;

    /**
     * @var boolean $deletable
     */
    protected $deletable = null;

    /**
     * @var boolean $deprecatedAndHidden
     */
    protected $deprecatedAndHidden = null;

    /**
     * @var boolean $feedEnabled
     */
    protected $feedEnabled = null;

    /**
     * @var Field[] $fields
     */
    protected $fields = null;

    /**
     * @var boolean $hasSubtypes
     */
    protected $hasSubtypes = null;

    /**
     * @var boolean $idEnabled
     */
    protected $idEnabled = null;

    /**
     * @var boolean $isSubtype
     */
    protected $isSubtype = null;

    /**
     * @var string $keyPrefix
     */
    protected $keyPrefix = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var string $labelPlural
     */
    protected $labelPlural = null;

    /**
     * @var boolean $layoutable
     */
    protected $layoutable = null;

    /**
     * @var boolean $mergeable
     */
    protected $mergeable = null;

    /**
     * @var boolean $mruEnabled
     */
    protected $mruEnabled = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var NamedLayoutInfo[] $namedLayoutInfos
     */
    protected $namedLayoutInfos = null;

    /**
     * @var string $networkScopeFieldName
     */
    protected $networkScopeFieldName = null;

    /**
     * @var boolean $queryable
     */
    protected $queryable = null;

    /**
     * @var RecordTypeInfo[] $recordTypeInfos
     */
    protected $recordTypeInfos = null;

    /**
     * @var boolean $replicateable
     */
    protected $replicateable = null;

    /**
     * @var boolean $retrieveable
     */
    protected $retrieveable = null;

    /**
     * @var boolean $searchLayoutable
     */
    protected $searchLayoutable = null;

    /**
     * @var boolean $searchable
     */
    protected $searchable = null;

    /**
     * @var ScopeInfo[] $supportedScopes
     */
    protected $supportedScopes = null;

    /**
     * @var boolean $triggerable
     */
    protected $triggerable = null;

    /**
     * @var boolean $undeletable
     */
    protected $undeletable = null;

    /**
     * @var boolean $updateable
     */
    protected $updateable = null;

    /**
     * @var string $urlDetail
     */
    protected $urlDetail = null;

    /**
     * @var string $urlEdit
     */
    protected $urlEdit = null;

    /**
     * @var string $urlNew
     */
    protected $urlNew = null;

    /**
     * @param boolean $activateable
     * @param boolean $compactLayoutable
     * @param boolean $createable
     * @param boolean $custom
     * @param boolean $customSetting
     * @param boolean $deletable
     * @param boolean $deprecatedAndHidden
     * @param boolean $feedEnabled
     * @param boolean $hasSubtypes
     * @param boolean $idEnabled
     * @param boolean $isSubtype
     * @param string $label
     * @param string $labelPlural
     * @param boolean $layoutable
     * @param boolean $mergeable
     * @param boolean $mruEnabled
     * @param string $name
     * @param boolean $queryable
     * @param boolean $replicateable
     * @param boolean $retrieveable
     * @param boolean $searchable
     * @param boolean $undeletable
     * @param boolean $updateable
     */
    public function __construct($activateable = null, $compactLayoutable = null, $createable = null, $custom = null, $customSetting = null, $deletable = null, $deprecatedAndHidden = null, $feedEnabled = null, $hasSubtypes = null, $idEnabled = null, $isSubtype = null, $label = null, $labelPlural = null, $layoutable = null, $mergeable = null, $mruEnabled = null, $name = null, $queryable = null, $replicateable = null, $retrieveable = null, $searchable = null, $undeletable = null, $updateable = null)
    {
      $this->activateable = $activateable;
      $this->compactLayoutable = $compactLayoutable;
      $this->createable = $createable;
      $this->custom = $custom;
      $this->customSetting = $customSetting;
      $this->deletable = $deletable;
      $this->deprecatedAndHidden = $deprecatedAndHidden;
      $this->feedEnabled = $feedEnabled;
      $this->hasSubtypes = $hasSubtypes;
      $this->idEnabled = $idEnabled;
      $this->isSubtype = $isSubtype;
      $this->label = $label;
      $this->labelPlural = $labelPlural;
      $this->layoutable = $layoutable;
      $this->mergeable = $mergeable;
      $this->mruEnabled = $mruEnabled;
      $this->name = $name;
      $this->queryable = $queryable;
      $this->replicateable = $replicateable;
      $this->retrieveable = $retrieveable;
      $this->searchable = $searchable;
      $this->undeletable = $undeletable;
      $this->updateable = $updateable;
    }

    /**
     * @return ActionOverride[]
     */
    public function getActionOverrides()
    {
      return $this->actionOverrides;
    }

    /**
     * @param ActionOverride[] $actionOverrides
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setActionOverrides(array $actionOverrides = null)
    {
      $this->actionOverrides = $actionOverrides;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActivateable()
    {
      return $this->activateable;
    }

    /**
     * @param boolean $activateable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setActivateable($activateable)
    {
      $this->activateable = $activateable;
      return $this;
    }

    /**
     * @return ChildRelationship[]
     */
    public function getChildRelationships()
    {
      return $this->childRelationships;
    }

    /**
     * @param ChildRelationship[] $childRelationships
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setChildRelationships(array $childRelationships = null)
    {
      $this->childRelationships = $childRelationships;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCompactLayoutable()
    {
      return $this->compactLayoutable;
    }

    /**
     * @param boolean $compactLayoutable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setCompactLayoutable($compactLayoutable)
    {
      $this->compactLayoutable = $compactLayoutable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreateable()
    {
      return $this->createable;
    }

    /**
     * @param boolean $createable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setCreateable($createable)
    {
      $this->createable = $createable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustom()
    {
      return $this->custom;
    }

    /**
     * @param boolean $custom
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setCustom($custom)
    {
      $this->custom = $custom;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomSetting()
    {
      return $this->customSetting;
    }

    /**
     * @param boolean $customSetting
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setCustomSetting($customSetting)
    {
      $this->customSetting = $customSetting;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDataTranslationEnabled()
    {
      return $this->dataTranslationEnabled;
    }

    /**
     * @param boolean $dataTranslationEnabled
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setDataTranslationEnabled($dataTranslationEnabled)
    {
      $this->dataTranslationEnabled = $dataTranslationEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeletable()
    {
      return $this->deletable;
    }

    /**
     * @param boolean $deletable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setDeletable($deletable)
    {
      $this->deletable = $deletable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeprecatedAndHidden()
    {
      return $this->deprecatedAndHidden;
    }

    /**
     * @param boolean $deprecatedAndHidden
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setDeprecatedAndHidden($deprecatedAndHidden)
    {
      $this->deprecatedAndHidden = $deprecatedAndHidden;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFeedEnabled()
    {
      return $this->feedEnabled;
    }

    /**
     * @param boolean $feedEnabled
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setFeedEnabled($feedEnabled)
    {
      $this->feedEnabled = $feedEnabled;
      return $this;
    }

    /**
     * @return Field[]
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param Field[] $fields
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setFields(array $fields = null)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasSubtypes()
    {
      return $this->hasSubtypes;
    }

    /**
     * @param boolean $hasSubtypes
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setHasSubtypes($hasSubtypes)
    {
      $this->hasSubtypes = $hasSubtypes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIdEnabled()
    {
      return $this->idEnabled;
    }

    /**
     * @param boolean $idEnabled
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setIdEnabled($idEnabled)
    {
      $this->idEnabled = $idEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSubtype()
    {
      return $this->isSubtype;
    }

    /**
     * @param boolean $isSubtype
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setIsSubtype($isSubtype)
    {
      $this->isSubtype = $isSubtype;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyPrefix()
    {
      return $this->keyPrefix;
    }

    /**
     * @param string $keyPrefix
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setKeyPrefix($keyPrefix)
    {
      $this->keyPrefix = $keyPrefix;
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
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelPlural()
    {
      return $this->labelPlural;
    }

    /**
     * @param string $labelPlural
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setLabelPlural($labelPlural)
    {
      $this->labelPlural = $labelPlural;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLayoutable()
    {
      return $this->layoutable;
    }

    /**
     * @param boolean $layoutable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setLayoutable($layoutable)
    {
      $this->layoutable = $layoutable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMergeable()
    {
      return $this->mergeable;
    }

    /**
     * @param boolean $mergeable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setMergeable($mergeable)
    {
      $this->mergeable = $mergeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMruEnabled()
    {
      return $this->mruEnabled;
    }

    /**
     * @param boolean $mruEnabled
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setMruEnabled($mruEnabled)
    {
      $this->mruEnabled = $mruEnabled;
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
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return NamedLayoutInfo[]
     */
    public function getNamedLayoutInfos()
    {
      return $this->namedLayoutInfos;
    }

    /**
     * @param NamedLayoutInfo[] $namedLayoutInfos
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setNamedLayoutInfos(array $namedLayoutInfos = null)
    {
      $this->namedLayoutInfos = $namedLayoutInfos;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetworkScopeFieldName()
    {
      return $this->networkScopeFieldName;
    }

    /**
     * @param string $networkScopeFieldName
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setNetworkScopeFieldName($networkScopeFieldName)
    {
      $this->networkScopeFieldName = $networkScopeFieldName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQueryable()
    {
      return $this->queryable;
    }

    /**
     * @param boolean $queryable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setQueryable($queryable)
    {
      $this->queryable = $queryable;
      return $this;
    }

    /**
     * @return RecordTypeInfo[]
     */
    public function getRecordTypeInfos()
    {
      return $this->recordTypeInfos;
    }

    /**
     * @param RecordTypeInfo[] $recordTypeInfos
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setRecordTypeInfos(array $recordTypeInfos = null)
    {
      $this->recordTypeInfos = $recordTypeInfos;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplicateable()
    {
      return $this->replicateable;
    }

    /**
     * @param boolean $replicateable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setReplicateable($replicateable)
    {
      $this->replicateable = $replicateable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRetrieveable()
    {
      return $this->retrieveable;
    }

    /**
     * @param boolean $retrieveable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setRetrieveable($retrieveable)
    {
      $this->retrieveable = $retrieveable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchLayoutable()
    {
      return $this->searchLayoutable;
    }

    /**
     * @param boolean $searchLayoutable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setSearchLayoutable($searchLayoutable)
    {
      $this->searchLayoutable = $searchLayoutable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchable()
    {
      return $this->searchable;
    }

    /**
     * @param boolean $searchable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setSearchable($searchable)
    {
      $this->searchable = $searchable;
      return $this;
    }

    /**
     * @return ScopeInfo[]
     */
    public function getSupportedScopes()
    {
      return $this->supportedScopes;
    }

    /**
     * @param ScopeInfo[] $supportedScopes
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setSupportedScopes(array $supportedScopes = null)
    {
      $this->supportedScopes = $supportedScopes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTriggerable()
    {
      return $this->triggerable;
    }

    /**
     * @param boolean $triggerable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setTriggerable($triggerable)
    {
      $this->triggerable = $triggerable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUndeletable()
    {
      return $this->undeletable;
    }

    /**
     * @param boolean $undeletable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setUndeletable($undeletable)
    {
      $this->undeletable = $undeletable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateable()
    {
      return $this->updateable;
    }

    /**
     * @param boolean $updateable
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setUpdateable($updateable)
    {
      $this->updateable = $updateable;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlDetail()
    {
      return $this->urlDetail;
    }

    /**
     * @param string $urlDetail
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setUrlDetail($urlDetail)
    {
      $this->urlDetail = $urlDetail;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlEdit()
    {
      return $this->urlEdit;
    }

    /**
     * @param string $urlEdit
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setUrlEdit($urlEdit)
    {
      $this->urlEdit = $urlEdit;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrlNew()
    {
      return $this->urlNew;
    }

    /**
     * @param string $urlNew
     * @return \SForce\Wsdl\DescribeSObjectResult
     */
    public function setUrlNew($urlNew)
    {
      $this->urlNew = $urlNew;
      return $this;
    }

}
