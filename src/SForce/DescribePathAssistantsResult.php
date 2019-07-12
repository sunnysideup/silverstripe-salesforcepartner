<?php

namespace SForce\Wsdl;

class DescribePathAssistantsResult
{

    /**
     * @var DescribePathAssistant[] $pathAssistants
     */
    protected $pathAssistants = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DescribePathAssistant[]
     */
    public function getPathAssistants()
    {
      return $this->pathAssistants;
    }

    /**
     * @param DescribePathAssistant[] $pathAssistants
     * @return \SForce\Wsdl\DescribePathAssistantsResult
     */
    public function setPathAssistants(array $pathAssistants = null)
    {
      $this->pathAssistants = $pathAssistants;
      return $this;
    }

}
