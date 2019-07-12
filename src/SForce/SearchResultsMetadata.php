<?php

namespace SForce\Wsdl;

class SearchResultsMetadata
{
    /**
     * @var LabelsSearchMetadata[]
     */
    protected $entityLabelMetadata = null;

    /**
     * @var EntitySearchMetadata[]
     */
    protected $entityMetadata = null;

    public function __construct()
    {
    }

    /**
     * @return LabelsSearchMetadata[]
     */
    public function getEntityLabelMetadata()
    {
        return $this->entityLabelMetadata;
    }

    /**
     * @param LabelsSearchMetadata[] $entityLabelMetadata
     * @return \SForce\Wsdl\SearchResultsMetadata
     */
    public function setEntityLabelMetadata(array $entityLabelMetadata = null)
    {
        $this->entityLabelMetadata = $entityLabelMetadata;
        return $this;
    }

    /**
     * @return EntitySearchMetadata[]
     */
    public function getEntityMetadata()
    {
        return $this->entityMetadata;
    }

    /**
     * @param EntitySearchMetadata[] $entityMetadata
     * @return \SForce\Wsdl\SearchResultsMetadata
     */
    public function setEntityMetadata(array $entityMetadata = null)
    {
        $this->entityMetadata = $entityMetadata;
        return $this;
    }
}
