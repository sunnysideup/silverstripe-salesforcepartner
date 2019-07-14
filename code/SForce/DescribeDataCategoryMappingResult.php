<?php

namespace SForce\Wsdl;

class DescribeDataCategoryMappingResult
{
    /**
     * @var string
     */
    protected $dataCategoryGroupId = null;

    /**
     * @var string
     */
    protected $dataCategoryGroupLabel = null;

    /**
     * @var string
     */
    protected $dataCategoryGroupName = null;

    /**
     * @var string
     */
    protected $dataCategoryId = null;

    /**
     * @var string
     */
    protected $dataCategoryLabel = null;

    /**
     * @var string
     */
    protected $dataCategoryName = null;

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $mappedEntity = null;

    /**
     * @var string
     */
    protected $mappedField = null;

    /**
     * @param string $dataCategoryGroupId
     * @param string $dataCategoryGroupLabel
     * @param string $dataCategoryGroupName
     * @param string $dataCategoryId
     * @param string $dataCategoryLabel
     * @param string $dataCategoryName
     * @param string $id
     * @param string $mappedEntity
     * @param string $mappedField
     */
    public function __construct($dataCategoryGroupId = null, $dataCategoryGroupLabel = null, $dataCategoryGroupName = null, $dataCategoryId = null, $dataCategoryLabel = null, $dataCategoryName = null, $id = null, $mappedEntity = null, $mappedField = null)
    {
        $this->dataCategoryGroupId = $dataCategoryGroupId;
        $this->dataCategoryGroupLabel = $dataCategoryGroupLabel;
        $this->dataCategoryGroupName = $dataCategoryGroupName;
        $this->dataCategoryId = $dataCategoryId;
        $this->dataCategoryLabel = $dataCategoryLabel;
        $this->dataCategoryName = $dataCategoryName;
        $this->id = $id;
        $this->mappedEntity = $mappedEntity;
        $this->mappedField = $mappedField;
    }

    /**
     * @return string
     */
    public function getDataCategoryGroupId()
    {
        return $this->dataCategoryGroupId;
    }

    /**
     * @param string $dataCategoryGroupId
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryGroupId($dataCategoryGroupId)
    {
        $this->dataCategoryGroupId = $dataCategoryGroupId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataCategoryGroupLabel()
    {
        return $this->dataCategoryGroupLabel;
    }

    /**
     * @param string $dataCategoryGroupLabel
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryGroupLabel($dataCategoryGroupLabel)
    {
        $this->dataCategoryGroupLabel = $dataCategoryGroupLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataCategoryGroupName()
    {
        return $this->dataCategoryGroupName;
    }

    /**
     * @param string $dataCategoryGroupName
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryGroupName($dataCategoryGroupName)
    {
        $this->dataCategoryGroupName = $dataCategoryGroupName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataCategoryId()
    {
        return $this->dataCategoryId;
    }

    /**
     * @param string $dataCategoryId
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryId($dataCategoryId)
    {
        $this->dataCategoryId = $dataCategoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataCategoryLabel()
    {
        return $this->dataCategoryLabel;
    }

    /**
     * @param string $dataCategoryLabel
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryLabel($dataCategoryLabel)
    {
        $this->dataCategoryLabel = $dataCategoryLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataCategoryName()
    {
        return $this->dataCategoryName;
    }

    /**
     * @param string $dataCategoryName
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setDataCategoryName($dataCategoryName)
    {
        $this->dataCategoryName = $dataCategoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMappedEntity()
    {
        return $this->mappedEntity;
    }

    /**
     * @param string $mappedEntity
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setMappedEntity($mappedEntity)
    {
        $this->mappedEntity = $mappedEntity;
        return $this;
    }

    /**
     * @return string
     */
    public function getMappedField()
    {
        return $this->mappedField;
    }

    /**
     * @param string $mappedField
     * @return \SForce\Wsdl\DescribeDataCategoryMappingResult
     */
    public function setMappedField($mappedField)
    {
        $this->mappedField = $mappedField;
        return $this;
    }
}
