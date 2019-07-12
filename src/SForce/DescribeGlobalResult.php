<?php

namespace SForce\Wsdl;

class DescribeGlobalResult
{

    /**
     * @var string $encoding
     */
    protected $encoding = null;

    /**
     * @var int $maxBatchSize
     */
    protected $maxBatchSize = null;

    /**
     * @var DescribeGlobalSObjectResult[] $sobjects
     */
    protected $sobjects = null;

    /**
     * @param int $maxBatchSize
     */
    public function __construct($maxBatchSize = null)
    {
      $this->maxBatchSize = $maxBatchSize;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->encoding;
    }

    /**
     * @param string $encoding
     * @return \SForce\Wsdl\DescribeGlobalResult
     */
    public function setEncoding($encoding)
    {
      $this->encoding = $encoding;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxBatchSize()
    {
      return $this->maxBatchSize;
    }

    /**
     * @param int $maxBatchSize
     * @return \SForce\Wsdl\DescribeGlobalResult
     */
    public function setMaxBatchSize($maxBatchSize)
    {
      $this->maxBatchSize = $maxBatchSize;
      return $this;
    }

    /**
     * @return DescribeGlobalSObjectResult[]
     */
    public function getSobjects()
    {
      return $this->sobjects;
    }

    /**
     * @param DescribeGlobalSObjectResult[] $sobjects
     * @return \SForce\Wsdl\DescribeGlobalResult
     */
    public function setSobjects(array $sobjects = null)
    {
      $this->sobjects = $sobjects;
      return $this;
    }

}
