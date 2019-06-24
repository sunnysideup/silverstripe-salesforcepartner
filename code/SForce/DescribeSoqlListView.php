<?php

namespace SForce\Wsdl;

class DescribeSoqlListView
{

    /**
     * @var ListViewColumn[] $columns
     */
    protected $columns = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var ListViewOrderBy[] $orderBy
     */
    protected $orderBy = null;

    /**
     * @var string $query
     */
    protected $query = null;

    /**
     * @var ID $relatedEntityId
     */
    protected $relatedEntityId = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @var ID $scopeEntityId
     */
    protected $scopeEntityId = null;

    /**
     * @var string $sobjectType
     */
    protected $sobjectType = null;

    /**
     * @var SoqlWhereCondition $whereCondition
     */
    protected $whereCondition = null;

    /**
     * @param ListViewColumn[] $columns
     * @param ID $id
     * @param ListViewOrderBy[] $orderBy
     * @param string $query
     * @param string $sobjectType
     */
    public function __construct(array $columns = null, $id = null, array $orderBy = null, $query = null, $sobjectType = null)
    {
      $this->columns = $columns;
      $this->id = $id;
      $this->orderBy = $orderBy;
      $this->query = $query;
      $this->sobjectType = $sobjectType;
    }

    /**
     * @return ListViewColumn[]
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ListViewColumn[] $columns
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setColumns(array $columns)
    {
      $this->columns = $columns;
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
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return ListViewOrderBy[]
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param ListViewOrderBy[] $orderBy
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setOrderBy(array $orderBy)
    {
      $this->orderBy = $orderBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
      return $this->query;
    }

    /**
     * @param string $query
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setQuery($query)
    {
      $this->query = $query;
      return $this;
    }

    /**
     * @return ID
     */
    public function getRelatedEntityId()
    {
      return $this->relatedEntityId;
    }

    /**
     * @param ID $relatedEntityId
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setRelatedEntityId($relatedEntityId)
    {
      $this->relatedEntityId = $relatedEntityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param string $scope
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

    /**
     * @return ID
     */
    public function getScopeEntityId()
    {
      return $this->scopeEntityId;
    }

    /**
     * @param ID $scopeEntityId
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setScopeEntityId($scopeEntityId)
    {
      $this->scopeEntityId = $scopeEntityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSobjectType()
    {
      return $this->sobjectType;
    }

    /**
     * @param string $sobjectType
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setSobjectType($sobjectType)
    {
      $this->sobjectType = $sobjectType;
      return $this;
    }

    /**
     * @return SoqlWhereCondition
     */
    public function getWhereCondition()
    {
      return $this->whereCondition;
    }

    /**
     * @param SoqlWhereCondition $whereCondition
     * @return \SForce\Wsdl\DescribeSoqlListView
     */
    public function setWhereCondition($whereCondition)
    {
      $this->whereCondition = $whereCondition;
      return $this;
    }

}
