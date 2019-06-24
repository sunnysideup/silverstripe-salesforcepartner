<?php

namespace SForce\Wsdl;

class DescribeApprovalLayoutResult
{

    /**
     * @var DescribeApprovalLayout[] $approvalLayouts
     */
    protected $approvalLayouts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DescribeApprovalLayout[]
     */
    public function getApprovalLayouts()
    {
      return $this->approvalLayouts;
    }

    /**
     * @param DescribeApprovalLayout[] $approvalLayouts
     * @return \SForce\Wsdl\DescribeApprovalLayoutResult
     */
    public function setApprovalLayouts(array $approvalLayouts = null)
    {
      $this->approvalLayouts = $approvalLayouts;
      return $this;
    }

}
