<?php

namespace SForce\Wsdl;

class ListViewOrderBy
{

    /**
     * @var string $fieldNameOrPath
     */
    protected $fieldNameOrPath = null;

    /**
     * @var orderByNullsPosition $nullsPosition
     */
    protected $nullsPosition = null;

    /**
     * @var orderByDirection $sortDirection
     */
    protected $sortDirection = null;

    /**
     * @param string $fieldNameOrPath
     */
    public function __construct($fieldNameOrPath = null)
    {
      $this->fieldNameOrPath = $fieldNameOrPath;
    }

    /**
     * @return string
     */
    public function getFieldNameOrPath()
    {
      return $this->fieldNameOrPath;
    }

    /**
     * @param string $fieldNameOrPath
     * @return \SForce\Wsdl\ListViewOrderBy
     */
    public function setFieldNameOrPath($fieldNameOrPath)
    {
      $this->fieldNameOrPath = $fieldNameOrPath;
      return $this;
    }

    /**
     * @return orderByNullsPosition
     */
    public function getNullsPosition()
    {
      return $this->nullsPosition;
    }

    /**
     * @param orderByNullsPosition $nullsPosition
     * @return \SForce\Wsdl\ListViewOrderBy
     */
    public function setNullsPosition($nullsPosition)
    {
      $this->nullsPosition = $nullsPosition;
      return $this;
    }

    /**
     * @return orderByDirection
     */
    public function getSortDirection()
    {
      return $this->sortDirection;
    }

    /**
     * @param orderByDirection $sortDirection
     * @return \SForce\Wsdl\ListViewOrderBy
     */
    public function setSortDirection($sortDirection)
    {
      $this->sortDirection = $sortDirection;
      return $this;
    }

}
