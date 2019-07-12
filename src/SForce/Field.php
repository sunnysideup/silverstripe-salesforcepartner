<?php

namespace SForce\Wsdl;

class Field
{

    /**
     * @var boolean $aggregatable
     */
    protected $aggregatable = null;

    /**
     * @var boolean $aiPredictionField
     */
    protected $aiPredictionField = null;

    /**
     * @var boolean $autoNumber
     */
    protected $autoNumber = null;

    /**
     * @var int $byteLength
     */
    protected $byteLength = null;

    /**
     * @var boolean $calculated
     */
    protected $calculated = null;

    /**
     * @var string $calculatedFormula
     */
    protected $calculatedFormula = null;

    /**
     * @var boolean $cascadeDelete
     */
    protected $cascadeDelete = null;

    /**
     * @var boolean $caseSensitive
     */
    protected $caseSensitive = null;

    /**
     * @var string $compoundFieldName
     */
    protected $compoundFieldName = null;

    /**
     * @var string $controllerName
     */
    protected $controllerName = null;

    /**
     * @var boolean $createable
     */
    protected $createable = null;

    /**
     * @var boolean $custom
     */
    protected $custom = null;

    /**
     * @var boolean $dataTranslationEnabled
     */
    protected $dataTranslationEnabled = null;

    /**
     * @var anyType $defaultValue
     */
    protected $defaultValue = null;

    /**
     * @var string $defaultValueFormula
     */
    protected $defaultValueFormula = null;

    /**
     * @var boolean $defaultedOnCreate
     */
    protected $defaultedOnCreate = null;

    /**
     * @var boolean $dependentPicklist
     */
    protected $dependentPicklist = null;

    /**
     * @var boolean $deprecatedAndHidden
     */
    protected $deprecatedAndHidden = null;

    /**
     * @var int $digits
     */
    protected $digits = null;

    /**
     * @var boolean $displayLocationInDecimal
     */
    protected $displayLocationInDecimal = null;

    /**
     * @var boolean $encrypted
     */
    protected $encrypted = null;

    /**
     * @var boolean $externalId
     */
    protected $externalId = null;

    /**
     * @var string $extraTypeInfo
     */
    protected $extraTypeInfo = null;

    /**
     * @var boolean $filterable
     */
    protected $filterable = null;

    /**
     * @var FilteredLookupInfo $filteredLookupInfo
     */
    protected $filteredLookupInfo = null;

    /**
     * @var boolean $formulaTreatNullNumberAsZero
     */
    protected $formulaTreatNullNumberAsZero = null;

    /**
     * @var boolean $groupable
     */
    protected $groupable = null;

    /**
     * @var boolean $highScaleNumber
     */
    protected $highScaleNumber = null;

    /**
     * @var boolean $htmlFormatted
     */
    protected $htmlFormatted = null;

    /**
     * @var boolean $idLookup
     */
    protected $idLookup = null;

    /**
     * @var string $inlineHelpText
     */
    protected $inlineHelpText = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var int $length
     */
    protected $length = null;

    /**
     * @var string $mask
     */
    protected $mask = null;

    /**
     * @var string $maskType
     */
    protected $maskType = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $nameField
     */
    protected $nameField = null;

    /**
     * @var boolean $namePointing
     */
    protected $namePointing = null;

    /**
     * @var boolean $nillable
     */
    protected $nillable = null;

    /**
     * @var boolean $permissionable
     */
    protected $permissionable = null;

    /**
     * @var PicklistEntry[] $picklistValues
     */
    protected $picklistValues = null;

    /**
     * @var boolean $polymorphicForeignKey
     */
    protected $polymorphicForeignKey = null;

    /**
     * @var int $precision
     */
    protected $precision = null;

    /**
     * @var boolean $queryByDistance
     */
    protected $queryByDistance = null;

    /**
     * @var string $referenceTargetField
     */
    protected $referenceTargetField = null;

    /**
     * @var string[] $referenceTo
     */
    protected $referenceTo = null;

    /**
     * @var string $relationshipName
     */
    protected $relationshipName = null;

    /**
     * @var int $relationshipOrder
     */
    protected $relationshipOrder = null;

    /**
     * @var boolean $restrictedDelete
     */
    protected $restrictedDelete = null;

    /**
     * @var boolean $restrictedPicklist
     */
    protected $restrictedPicklist = null;

    /**
     * @var int $scale
     */
    protected $scale = null;

    /**
     * @var boolean $searchPrefilterable
     */
    protected $searchPrefilterable = null;

    /**
     * @var soapType $soapType
     */
    protected $soapType = null;

    /**
     * @var boolean $sortable
     */
    protected $sortable = null;

    /**
     * @var fieldType $type
     */
    protected $type = null;

    /**
     * @var boolean $unique
     */
    protected $unique = null;

    /**
     * @var boolean $updateable
     */
    protected $updateable = null;

    /**
     * @var boolean $writeRequiresMasterRead
     */
    protected $writeRequiresMasterRead = null;

    /**
     * @param boolean $aggregatable
     * @param boolean $aiPredictionField
     * @param boolean $autoNumber
     * @param int $byteLength
     * @param boolean $calculated
     * @param boolean $caseSensitive
     * @param boolean $createable
     * @param boolean $custom
     * @param boolean $defaultedOnCreate
     * @param boolean $deprecatedAndHidden
     * @param int $digits
     * @param boolean $filterable
     * @param boolean $groupable
     * @param boolean $idLookup
     * @param string $label
     * @param int $length
     * @param string $name
     * @param boolean $nameField
     * @param boolean $nillable
     * @param boolean $permissionable
     * @param boolean $polymorphicForeignKey
     * @param int $precision
     * @param boolean $queryByDistance
     * @param boolean $restrictedPicklist
     * @param int $scale
     * @param boolean $searchPrefilterable
     * @param soapType $soapType
     * @param fieldType $type
     * @param boolean $unique
     * @param boolean $updateable
     */
    public function __construct($aggregatable = null, $aiPredictionField = null, $autoNumber = null, $byteLength = null, $calculated = null, $caseSensitive = null, $createable = null, $custom = null, $defaultedOnCreate = null, $deprecatedAndHidden = null, $digits = null, $filterable = null, $groupable = null, $idLookup = null, $label = null, $length = null, $name = null, $nameField = null, $nillable = null, $permissionable = null, $polymorphicForeignKey = null, $precision = null, $queryByDistance = null, $restrictedPicklist = null, $scale = null, $searchPrefilterable = null, $soapType = null, $type = null, $unique = null, $updateable = null)
    {
      $this->aggregatable = $aggregatable;
      $this->aiPredictionField = $aiPredictionField;
      $this->autoNumber = $autoNumber;
      $this->byteLength = $byteLength;
      $this->calculated = $calculated;
      $this->caseSensitive = $caseSensitive;
      $this->createable = $createable;
      $this->custom = $custom;
      $this->defaultedOnCreate = $defaultedOnCreate;
      $this->deprecatedAndHidden = $deprecatedAndHidden;
      $this->digits = $digits;
      $this->filterable = $filterable;
      $this->groupable = $groupable;
      $this->idLookup = $idLookup;
      $this->label = $label;
      $this->length = $length;
      $this->name = $name;
      $this->nameField = $nameField;
      $this->nillable = $nillable;
      $this->permissionable = $permissionable;
      $this->polymorphicForeignKey = $polymorphicForeignKey;
      $this->precision = $precision;
      $this->queryByDistance = $queryByDistance;
      $this->restrictedPicklist = $restrictedPicklist;
      $this->scale = $scale;
      $this->searchPrefilterable = $searchPrefilterable;
      $this->soapType = $soapType;
      $this->type = $type;
      $this->unique = $unique;
      $this->updateable = $updateable;
    }

    /**
     * @return boolean
     */
    public function getAggregatable()
    {
      return $this->aggregatable;
    }

    /**
     * @param boolean $aggregatable
     * @return \SForce\Wsdl\Field
     */
    public function setAggregatable($aggregatable)
    {
      $this->aggregatable = $aggregatable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAiPredictionField()
    {
      return $this->aiPredictionField;
    }

    /**
     * @param boolean $aiPredictionField
     * @return \SForce\Wsdl\Field
     */
    public function setAiPredictionField($aiPredictionField)
    {
      $this->aiPredictionField = $aiPredictionField;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoNumber()
    {
      return $this->autoNumber;
    }

    /**
     * @param boolean $autoNumber
     * @return \SForce\Wsdl\Field
     */
    public function setAutoNumber($autoNumber)
    {
      $this->autoNumber = $autoNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getByteLength()
    {
      return $this->byteLength;
    }

    /**
     * @param int $byteLength
     * @return \SForce\Wsdl\Field
     */
    public function setByteLength($byteLength)
    {
      $this->byteLength = $byteLength;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCalculated()
    {
      return $this->calculated;
    }

    /**
     * @param boolean $calculated
     * @return \SForce\Wsdl\Field
     */
    public function setCalculated($calculated)
    {
      $this->calculated = $calculated;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalculatedFormula()
    {
      return $this->calculatedFormula;
    }

    /**
     * @param string $calculatedFormula
     * @return \SForce\Wsdl\Field
     */
    public function setCalculatedFormula($calculatedFormula)
    {
      $this->calculatedFormula = $calculatedFormula;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCascadeDelete()
    {
      return $this->cascadeDelete;
    }

    /**
     * @param boolean $cascadeDelete
     * @return \SForce\Wsdl\Field
     */
    public function setCascadeDelete($cascadeDelete)
    {
      $this->cascadeDelete = $cascadeDelete;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCaseSensitive()
    {
      return $this->caseSensitive;
    }

    /**
     * @param boolean $caseSensitive
     * @return \SForce\Wsdl\Field
     */
    public function setCaseSensitive($caseSensitive)
    {
      $this->caseSensitive = $caseSensitive;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompoundFieldName()
    {
      return $this->compoundFieldName;
    }

    /**
     * @param string $compoundFieldName
     * @return \SForce\Wsdl\Field
     */
    public function setCompoundFieldName($compoundFieldName)
    {
      $this->compoundFieldName = $compoundFieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getControllerName()
    {
      return $this->controllerName;
    }

    /**
     * @param string $controllerName
     * @return \SForce\Wsdl\Field
     */
    public function setControllerName($controllerName)
    {
      $this->controllerName = $controllerName;
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
     * @return \SForce\Wsdl\Field
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
     * @return \SForce\Wsdl\Field
     */
    public function setCustom($custom)
    {
      $this->custom = $custom;
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
     * @return \SForce\Wsdl\Field
     */
    public function setDataTranslationEnabled($dataTranslationEnabled)
    {
      $this->dataTranslationEnabled = $dataTranslationEnabled;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getDefaultValue()
    {
      return $this->defaultValue;
    }

    /**
     * @param anyType $defaultValue
     * @return \SForce\Wsdl\Field
     */
    public function setDefaultValue($defaultValue)
    {
      $this->defaultValue = $defaultValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultValueFormula()
    {
      return $this->defaultValueFormula;
    }

    /**
     * @param string $defaultValueFormula
     * @return \SForce\Wsdl\Field
     */
    public function setDefaultValueFormula($defaultValueFormula)
    {
      $this->defaultValueFormula = $defaultValueFormula;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultedOnCreate()
    {
      return $this->defaultedOnCreate;
    }

    /**
     * @param boolean $defaultedOnCreate
     * @return \SForce\Wsdl\Field
     */
    public function setDefaultedOnCreate($defaultedOnCreate)
    {
      $this->defaultedOnCreate = $defaultedOnCreate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDependentPicklist()
    {
      return $this->dependentPicklist;
    }

    /**
     * @param boolean $dependentPicklist
     * @return \SForce\Wsdl\Field
     */
    public function setDependentPicklist($dependentPicklist)
    {
      $this->dependentPicklist = $dependentPicklist;
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
     * @return \SForce\Wsdl\Field
     */
    public function setDeprecatedAndHidden($deprecatedAndHidden)
    {
      $this->deprecatedAndHidden = $deprecatedAndHidden;
      return $this;
    }

    /**
     * @return int
     */
    public function getDigits()
    {
      return $this->digits;
    }

    /**
     * @param int $digits
     * @return \SForce\Wsdl\Field
     */
    public function setDigits($digits)
    {
      $this->digits = $digits;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayLocationInDecimal()
    {
      return $this->displayLocationInDecimal;
    }

    /**
     * @param boolean $displayLocationInDecimal
     * @return \SForce\Wsdl\Field
     */
    public function setDisplayLocationInDecimal($displayLocationInDecimal)
    {
      $this->displayLocationInDecimal = $displayLocationInDecimal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEncrypted()
    {
      return $this->encrypted;
    }

    /**
     * @param boolean $encrypted
     * @return \SForce\Wsdl\Field
     */
    public function setEncrypted($encrypted)
    {
      $this->encrypted = $encrypted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param boolean $externalId
     * @return \SForce\Wsdl\Field
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraTypeInfo()
    {
      return $this->extraTypeInfo;
    }

    /**
     * @param string $extraTypeInfo
     * @return \SForce\Wsdl\Field
     */
    public function setExtraTypeInfo($extraTypeInfo)
    {
      $this->extraTypeInfo = $extraTypeInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFilterable()
    {
      return $this->filterable;
    }

    /**
     * @param boolean $filterable
     * @return \SForce\Wsdl\Field
     */
    public function setFilterable($filterable)
    {
      $this->filterable = $filterable;
      return $this;
    }

    /**
     * @return FilteredLookupInfo
     */
    public function getFilteredLookupInfo()
    {
      return $this->filteredLookupInfo;
    }

    /**
     * @param FilteredLookupInfo $filteredLookupInfo
     * @return \SForce\Wsdl\Field
     */
    public function setFilteredLookupInfo($filteredLookupInfo)
    {
      $this->filteredLookupInfo = $filteredLookupInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFormulaTreatNullNumberAsZero()
    {
      return $this->formulaTreatNullNumberAsZero;
    }

    /**
     * @param boolean $formulaTreatNullNumberAsZero
     * @return \SForce\Wsdl\Field
     */
    public function setFormulaTreatNullNumberAsZero($formulaTreatNullNumberAsZero)
    {
      $this->formulaTreatNullNumberAsZero = $formulaTreatNullNumberAsZero;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGroupable()
    {
      return $this->groupable;
    }

    /**
     * @param boolean $groupable
     * @return \SForce\Wsdl\Field
     */
    public function setGroupable($groupable)
    {
      $this->groupable = $groupable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHighScaleNumber()
    {
      return $this->highScaleNumber;
    }

    /**
     * @param boolean $highScaleNumber
     * @return \SForce\Wsdl\Field
     */
    public function setHighScaleNumber($highScaleNumber)
    {
      $this->highScaleNumber = $highScaleNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHtmlFormatted()
    {
      return $this->htmlFormatted;
    }

    /**
     * @param boolean $htmlFormatted
     * @return \SForce\Wsdl\Field
     */
    public function setHtmlFormatted($htmlFormatted)
    {
      $this->htmlFormatted = $htmlFormatted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIdLookup()
    {
      return $this->idLookup;
    }

    /**
     * @param boolean $idLookup
     * @return \SForce\Wsdl\Field
     */
    public function setIdLookup($idLookup)
    {
      $this->idLookup = $idLookup;
      return $this;
    }

    /**
     * @return string
     */
    public function getInlineHelpText()
    {
      return $this->inlineHelpText;
    }

    /**
     * @param string $inlineHelpText
     * @return \SForce\Wsdl\Field
     */
    public function setInlineHelpText($inlineHelpText)
    {
      $this->inlineHelpText = $inlineHelpText;
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
     * @return \SForce\Wsdl\Field
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param int $length
     * @return \SForce\Wsdl\Field
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return string
     */
    public function getMask()
    {
      return $this->mask;
    }

    /**
     * @param string $mask
     * @return \SForce\Wsdl\Field
     */
    public function setMask($mask)
    {
      $this->mask = $mask;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaskType()
    {
      return $this->maskType;
    }

    /**
     * @param string $maskType
     * @return \SForce\Wsdl\Field
     */
    public function setMaskType($maskType)
    {
      $this->maskType = $maskType;
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
     * @return \SForce\Wsdl\Field
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNameField()
    {
      return $this->nameField;
    }

    /**
     * @param boolean $nameField
     * @return \SForce\Wsdl\Field
     */
    public function setNameField($nameField)
    {
      $this->nameField = $nameField;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNamePointing()
    {
      return $this->namePointing;
    }

    /**
     * @param boolean $namePointing
     * @return \SForce\Wsdl\Field
     */
    public function setNamePointing($namePointing)
    {
      $this->namePointing = $namePointing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNillable()
    {
      return $this->nillable;
    }

    /**
     * @param boolean $nillable
     * @return \SForce\Wsdl\Field
     */
    public function setNillable($nillable)
    {
      $this->nillable = $nillable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPermissionable()
    {
      return $this->permissionable;
    }

    /**
     * @param boolean $permissionable
     * @return \SForce\Wsdl\Field
     */
    public function setPermissionable($permissionable)
    {
      $this->permissionable = $permissionable;
      return $this;
    }

    /**
     * @return PicklistEntry[]
     */
    public function getPicklistValues()
    {
      return $this->picklistValues;
    }

    /**
     * @param PicklistEntry[] $picklistValues
     * @return \SForce\Wsdl\Field
     */
    public function setPicklistValues(array $picklistValues = null)
    {
      $this->picklistValues = $picklistValues;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPolymorphicForeignKey()
    {
      return $this->polymorphicForeignKey;
    }

    /**
     * @param boolean $polymorphicForeignKey
     * @return \SForce\Wsdl\Field
     */
    public function setPolymorphicForeignKey($polymorphicForeignKey)
    {
      $this->polymorphicForeignKey = $polymorphicForeignKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrecision()
    {
      return $this->precision;
    }

    /**
     * @param int $precision
     * @return \SForce\Wsdl\Field
     */
    public function setPrecision($precision)
    {
      $this->precision = $precision;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getQueryByDistance()
    {
      return $this->queryByDistance;
    }

    /**
     * @param boolean $queryByDistance
     * @return \SForce\Wsdl\Field
     */
    public function setQueryByDistance($queryByDistance)
    {
      $this->queryByDistance = $queryByDistance;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceTargetField()
    {
      return $this->referenceTargetField;
    }

    /**
     * @param string $referenceTargetField
     * @return \SForce\Wsdl\Field
     */
    public function setReferenceTargetField($referenceTargetField)
    {
      $this->referenceTargetField = $referenceTargetField;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getReferenceTo()
    {
      return $this->referenceTo;
    }

    /**
     * @param string[] $referenceTo
     * @return \SForce\Wsdl\Field
     */
    public function setReferenceTo(array $referenceTo = null)
    {
      $this->referenceTo = $referenceTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipName()
    {
      return $this->relationshipName;
    }

    /**
     * @param string $relationshipName
     * @return \SForce\Wsdl\Field
     */
    public function setRelationshipName($relationshipName)
    {
      $this->relationshipName = $relationshipName;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelationshipOrder()
    {
      return $this->relationshipOrder;
    }

    /**
     * @param int $relationshipOrder
     * @return \SForce\Wsdl\Field
     */
    public function setRelationshipOrder($relationshipOrder)
    {
      $this->relationshipOrder = $relationshipOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictedDelete()
    {
      return $this->restrictedDelete;
    }

    /**
     * @param boolean $restrictedDelete
     * @return \SForce\Wsdl\Field
     */
    public function setRestrictedDelete($restrictedDelete)
    {
      $this->restrictedDelete = $restrictedDelete;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictedPicklist()
    {
      return $this->restrictedPicklist;
    }

    /**
     * @param boolean $restrictedPicklist
     * @return \SForce\Wsdl\Field
     */
    public function setRestrictedPicklist($restrictedPicklist)
    {
      $this->restrictedPicklist = $restrictedPicklist;
      return $this;
    }

    /**
     * @return int
     */
    public function getScale()
    {
      return $this->scale;
    }

    /**
     * @param int $scale
     * @return \SForce\Wsdl\Field
     */
    public function setScale($scale)
    {
      $this->scale = $scale;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchPrefilterable()
    {
      return $this->searchPrefilterable;
    }

    /**
     * @param boolean $searchPrefilterable
     * @return \SForce\Wsdl\Field
     */
    public function setSearchPrefilterable($searchPrefilterable)
    {
      $this->searchPrefilterable = $searchPrefilterable;
      return $this;
    }

    /**
     * @return soapType
     */
    public function getSoapType()
    {
      return $this->soapType;
    }

    /**
     * @param soapType $soapType
     * @return \SForce\Wsdl\Field
     */
    public function setSoapType($soapType)
    {
      $this->soapType = $soapType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSortable()
    {
      return $this->sortable;
    }

    /**
     * @param boolean $sortable
     * @return \SForce\Wsdl\Field
     */
    public function setSortable($sortable)
    {
      $this->sortable = $sortable;
      return $this;
    }

    /**
     * @return fieldType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param fieldType $type
     * @return \SForce\Wsdl\Field
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnique()
    {
      return $this->unique;
    }

    /**
     * @param boolean $unique
     * @return \SForce\Wsdl\Field
     */
    public function setUnique($unique)
    {
      $this->unique = $unique;
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
     * @return \SForce\Wsdl\Field
     */
    public function setUpdateable($updateable)
    {
      $this->updateable = $updateable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWriteRequiresMasterRead()
    {
      return $this->writeRequiresMasterRead;
    }

    /**
     * @param boolean $writeRequiresMasterRead
     * @return \SForce\Wsdl\Field
     */
    public function setWriteRequiresMasterRead($writeRequiresMasterRead)
    {
      $this->writeRequiresMasterRead = $writeRequiresMasterRead;
      return $this;
    }

}
