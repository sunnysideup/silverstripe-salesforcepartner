<?php

namespace SForce\Wsdl;

class ListViewRecord
{

    /**
     * @var ListViewRecordColumn[] $columns
     */
    protected $columns = null;

    /**
     * @param ListViewRecordColumn[] $columns
     */
    public function __construct(array $columns = null)
    {
      $this->columns = $columns;
    }

    /**
     * @return ListViewRecordColumn[]
     */
    public function getColumns()
    {
      return $this->columns;
    }

    /**
     * @param ListViewRecordColumn[] $columns
     * @return \SForce\Wsdl\ListViewRecord
     */
    public function setColumns(array $columns)
    {
      $this->columns = $columns;
      return $this;
    }

}
