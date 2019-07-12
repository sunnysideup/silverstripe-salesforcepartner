<?php

namespace SForce\Wsdl;

class ChildRelationship
{

    /**
     * @var boolean $cascadeDelete
     */
    protected $cascadeDelete = null;

    /**
     * @var string $childSObject
     */
    protected $childSObject = null;

    /**
     * @var boolean $deprecatedAndHidden
     */
    protected $deprecatedAndHidden = null;

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var string[] $junctionIdListNames
     */
    protected $junctionIdListNames = null;

    /**
     * @var string[] $junctionReferenceTo
     */
    protected $junctionReferenceTo = null;

    /**
     * @var string $relationshipName
     */
    protected $relationshipName = null;

    /**
     * @var boolean $restrictedDelete
     */
    protected $restrictedDelete = null;

    /**
     * @param boolean $cascadeDelete
     * @param string $childSObject
     * @param boolean $deprecatedAndHidden
     * @param string $field
     */
    public function __construct($cascadeDelete = null, $childSObject = null, $deprecatedAndHidden = null, $field = null)
    {
      $this->cascadeDelete = $cascadeDelete;
      $this->childSObject = $childSObject;
      $this->deprecatedAndHidden = $deprecatedAndHidden;
      $this->field = $field;
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
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setCascadeDelete($cascadeDelete)
    {
      $this->cascadeDelete = $cascadeDelete;
      return $this;
    }

    /**
     * @return string
     */
    public function getChildSObject()
    {
      return $this->childSObject;
    }

    /**
     * @param string $childSObject
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setChildSObject($childSObject)
    {
      $this->childSObject = $childSObject;
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
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setDeprecatedAndHidden($deprecatedAndHidden)
    {
      $this->deprecatedAndHidden = $deprecatedAndHidden;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setField($field)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getJunctionIdListNames()
    {
      return $this->junctionIdListNames;
    }

    /**
     * @param string[] $junctionIdListNames
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setJunctionIdListNames(array $junctionIdListNames = null)
    {
      $this->junctionIdListNames = $junctionIdListNames;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getJunctionReferenceTo()
    {
      return $this->junctionReferenceTo;
    }

    /**
     * @param string[] $junctionReferenceTo
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setJunctionReferenceTo(array $junctionReferenceTo = null)
    {
      $this->junctionReferenceTo = $junctionReferenceTo;
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
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setRelationshipName($relationshipName)
    {
      $this->relationshipName = $relationshipName;
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
     * @return \SForce\Wsdl\ChildRelationship
     */
    public function setRestrictedDelete($restrictedDelete)
    {
      $this->restrictedDelete = $restrictedDelete;
      return $this;
    }

}
