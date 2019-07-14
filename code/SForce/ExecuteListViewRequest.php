<?php

namespace SForce\Wsdl;

class ExecuteListViewRequest
{
    /**
     * @var string
     */
    protected $developerNameOrId = null;

    /**
     * @var int
     */
    protected $limit = null;

    /**
     * @var int
     */
    protected $offset = null;

    /**
     * @var ListViewOrderBy[]
     */
    protected $orderBy = null;

    /**
     * @var string
     */
    protected $sobjectType = null;

    /**
     * @param string $developerNameOrId
     * @param ListViewOrderBy[] $orderBy
     * @param string $sobjectType
     */
    public function __construct($developerNameOrId = null, array $orderBy = null, $sobjectType = null)
    {
        $this->developerNameOrId = $developerNameOrId;
        $this->orderBy = $orderBy;
        $this->sobjectType = $sobjectType;
    }

    /**
     * @return string
     */
    public function getDeveloperNameOrId()
    {
        return $this->developerNameOrId;
    }

    /**
     * @param string $developerNameOrId
     * @return \SForce\Wsdl\ExecuteListViewRequest
     */
    public function setDeveloperNameOrId($developerNameOrId)
    {
        $this->developerNameOrId = $developerNameOrId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return \SForce\Wsdl\ExecuteListViewRequest
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return \SForce\Wsdl\ExecuteListViewRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
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
     * @return \SForce\Wsdl\ExecuteListViewRequest
     */
    public function setOrderBy(array $orderBy)
    {
        $this->orderBy = $orderBy;
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
     * @return \SForce\Wsdl\ExecuteListViewRequest
     */
    public function setSobjectType($sobjectType)
    {
        $this->sobjectType = $sobjectType;
        return $this;
    }
}
