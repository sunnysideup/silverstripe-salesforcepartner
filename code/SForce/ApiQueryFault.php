<?php

namespace SForce\Wsdl;

class ApiQueryFault extends ApiFault
{

    /**
     * @var int $row
     */
    protected $row = null;

    /**
     * @var int $column
     */
    protected $column = null;

    /**
     * @param ExceptionCode $exceptionCode
     * @param string $exceptionMessage
     * @param int $row
     * @param int $column
     */
    public function __construct($exceptionCode = null, $exceptionMessage = null, $row = null, $column = null)
    {
      parent::__construct($exceptionCode, $exceptionMessage);
      $this->row = $row;
      $this->column = $column;
    }

    /**
     * @return int
     */
    public function getRow()
    {
      return $this->row;
    }

    /**
     * @param int $row
     * @return \SForce\Wsdl\ApiQueryFault
     */
    public function setRow($row)
    {
      $this->row = $row;
      return $this;
    }

    /**
     * @return int
     */
    public function getColumn()
    {
      return $this->column;
    }

    /**
     * @param int $column
     * @return \SForce\Wsdl\ApiQueryFault
     */
    public function setColumn($column)
    {
      $this->column = $column;
      return $this;
    }

}
