<?php

namespace SForce\Wsdl;

class ExecuteListViewResult
{
    /**
     * @var ListViewColumn[]
     */
    protected $columns = null;

    /**
     * @var string
     */
    protected $developerName = null;

    /**
     * @var boolean
     */
    protected $done = null;

    /**
     * @var ID
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $label = null;

    /**
     * @var ListViewRecord[]
     */
    protected $records = null;

    /**
     * @var int
     */
    protected $size = null;

    /**
     * @param ListViewColumn[] $columns
     * @param string $developerName
     * @param boolean $done
     * @param ID $id
     * @param string $label
     * @param ListViewRecord[] $records
     * @param int $size
     */
    public function __construct(array $columns = null, $developerName = null, $done = null, $id = null, $label = null, array $records = null, $size = null)
    {
        $this->columns = $columns;
        $this->developerName = $developerName;
        $this->done = $done;
        $this->id = $id;
        $this->label = $label;
        $this->records = $records;
        $this->size = $size;
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
     * @return \SForce\Wsdl\ExecuteListViewResult
     */
    public function setColumns(array $columns)
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * @param string $developerName
     * @return \SForce\Wsdl\ExecuteListViewResult
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * @param boolean $done
     * @return \SForce\Wsdl\ExecuteListViewResult
     */
    public function setDone($done)
    {
        $this->done = $done;
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
     * @return \SForce\Wsdl\ExecuteListViewResult
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \SForce\Wsdl\ExecuteListViewResult
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return ListViewRecord[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param ListViewRecord[] $records
     * @return \SForce\Wsdl\ExecuteListViewResult
     */
    public function setRecords(array $records)
    {
        $this->records = $records;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return \SForce\Wsdl\ExecuteListViewResult
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
}
