<?php

namespace SForce\Wsdl;

class RelatedListSort
{

    /**
     * @var boolean $ascending
     */
    protected $ascending = null;

    /**
     * @var string $column
     */
    protected $column = null;

    /**
     * @param boolean $ascending
     * @param string $column
     */
    public function __construct($ascending = null, $column = null)
    {
      $this->ascending = $ascending;
      $this->column = $column;
    }

    /**
     * @return boolean
     */
    public function getAscending()
    {
      return $this->ascending;
    }

    /**
     * @param boolean $ascending
     * @return \SForce\Wsdl\RelatedListSort
     */
    public function setAscending($ascending)
    {
      $this->ascending = $ascending;
      return $this;
    }

    /**
     * @return string
     */
    public function getColumn()
    {
      return $this->column;
    }

    /**
     * @param string $column
     * @return \SForce\Wsdl\RelatedListSort
     */
    public function setColumn($column)
    {
      $this->column = $column;
      return $this;
    }

}
