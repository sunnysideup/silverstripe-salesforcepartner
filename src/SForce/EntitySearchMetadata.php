<?php

namespace SForce\Wsdl;

class EntitySearchMetadata
{

    /**
     * @var string $entityName
     */
    protected $entityName = null;

    /**
     * @var FieldLevelSearchMetadata[] $fieldMetadata
     */
    protected $fieldMetadata = null;

    /**
     * @var EntityIntentQueryMetadata $intentQueryMetadata
     */
    protected $intentQueryMetadata = null;

    /**
     * @var EntitySearchPromotionMetadata $searchPromotionMetadata
     */
    protected $searchPromotionMetadata = null;

    /**
     * @var EntitySpellCorrectionMetadata $spellCorrectionMetadata
     */
    protected $spellCorrectionMetadata = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
      return $this->entityName;
    }

    /**
     * @param string $entityName
     * @return \SForce\Wsdl\EntitySearchMetadata
     */
    public function setEntityName($entityName)
    {
      $this->entityName = $entityName;
      return $this;
    }

    /**
     * @return FieldLevelSearchMetadata[]
     */
    public function getFieldMetadata()
    {
      return $this->fieldMetadata;
    }

    /**
     * @param FieldLevelSearchMetadata[] $fieldMetadata
     * @return \SForce\Wsdl\EntitySearchMetadata
     */
    public function setFieldMetadata(array $fieldMetadata = null)
    {
      $this->fieldMetadata = $fieldMetadata;
      return $this;
    }

    /**
     * @return EntityIntentQueryMetadata
     */
    public function getIntentQueryMetadata()
    {
      return $this->intentQueryMetadata;
    }

    /**
     * @param EntityIntentQueryMetadata $intentQueryMetadata
     * @return \SForce\Wsdl\EntitySearchMetadata
     */
    public function setIntentQueryMetadata($intentQueryMetadata)
    {
      $this->intentQueryMetadata = $intentQueryMetadata;
      return $this;
    }

    /**
     * @return EntitySearchPromotionMetadata
     */
    public function getSearchPromotionMetadata()
    {
      return $this->searchPromotionMetadata;
    }

    /**
     * @param EntitySearchPromotionMetadata $searchPromotionMetadata
     * @return \SForce\Wsdl\EntitySearchMetadata
     */
    public function setSearchPromotionMetadata($searchPromotionMetadata)
    {
      $this->searchPromotionMetadata = $searchPromotionMetadata;
      return $this;
    }

    /**
     * @return EntitySpellCorrectionMetadata
     */
    public function getSpellCorrectionMetadata()
    {
      return $this->spellCorrectionMetadata;
    }

    /**
     * @param EntitySpellCorrectionMetadata $spellCorrectionMetadata
     * @return \SForce\Wsdl\EntitySearchMetadata
     */
    public function setSpellCorrectionMetadata($spellCorrectionMetadata)
    {
      $this->spellCorrectionMetadata = $spellCorrectionMetadata;
      return $this;
    }

}
