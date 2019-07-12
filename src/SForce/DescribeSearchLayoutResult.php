<?php

namespace SForce\Wsdl;

class DescribeSearchLayoutResult
{
    /**
     * @var string
     */
    protected $errorMsg = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var int
     */
    protected $limitRows = null;

    /**
     * @var string
     */
    protected $objectType = null;

    /**
     * @var DescribeColumn[]
     */
    protected $searchColumns = null;

    /**
     * @param string $objectType
     */
    public function __construct($objectType = null)
    {
        $this->objectType = $objectType;
    }

    /**
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     * @return \SForce\Wsdl\DescribeSearchLayoutResult
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;
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
     * @return \SForce\Wsdl\DescribeSearchLayoutResult
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitRows()
    {
        return $this->limitRows;
    }

    /**
     * @param int $limitRows
     * @return \SForce\Wsdl\DescribeSearchLayoutResult
     */
    public function setLimitRows($limitRows)
    {
        $this->limitRows = $limitRows;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     * @return \SForce\Wsdl\DescribeSearchLayoutResult
     */
    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @return DescribeColumn[]
     */
    public function getSearchColumns()
    {
        return $this->searchColumns;
    }

    /**
     * @param DescribeColumn[] $searchColumns
     * @return \SForce\Wsdl\DescribeSearchLayoutResult
     */
    public function setSearchColumns(array $searchColumns = null)
    {
        $this->searchColumns = $searchColumns;
        return $this;
    }
}
