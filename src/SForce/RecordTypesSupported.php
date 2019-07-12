<?php

namespace SForce\Wsdl;

class RecordTypesSupported
{

    /**
     * @var RecordTypeInfo[] $recordTypeInfos
     */
    protected $recordTypeInfos = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordTypeInfo[]
     */
    public function getRecordTypeInfos()
    {
      return $this->recordTypeInfos;
    }

    /**
     * @param RecordTypeInfo[] $recordTypeInfos
     * @return \SForce\Wsdl\RecordTypesSupported
     */
    public function setRecordTypeInfos(array $recordTypeInfos = null)
    {
      $this->recordTypeInfos = $recordTypeInfos;
      return $this;
    }

}
