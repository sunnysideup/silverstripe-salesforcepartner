<?php

namespace SForce\Wsdl;

class LabelsSearchMetadata
{
    /**
     * @var NameValuePair[]
     */
    protected $entityFieldLabels = null;

    /**
     * @var string
     */
    protected $entityName = null;

    public function __construct()
    {
    }

    /**
     * @return NameValuePair[]
     */
    public function getEntityFieldLabels()
    {
        return $this->entityFieldLabels;
    }

    /**
     * @param NameValuePair[] $entityFieldLabels
     * @return \SForce\Wsdl\LabelsSearchMetadata
     */
    public function setEntityFieldLabels(array $entityFieldLabels = null)
    {
        $this->entityFieldLabels = $entityFieldLabels;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     * @return \SForce\Wsdl\LabelsSearchMetadata
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
        return $this;
    }
}
