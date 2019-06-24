<?php

namespace SForce\Wsdl;

class DescribeLayoutButtonSection
{

    /**
     * @var DescribeLayoutButton[] $detailButtons
     */
    protected $detailButtons = null;

    /**
     * @param DescribeLayoutButton[] $detailButtons
     */
    public function __construct(array $detailButtons = null)
    {
      $this->detailButtons = $detailButtons;
    }

    /**
     * @return DescribeLayoutButton[]
     */
    public function getDetailButtons()
    {
      return $this->detailButtons;
    }

    /**
     * @param DescribeLayoutButton[] $detailButtons
     * @return \SForce\Wsdl\DescribeLayoutButtonSection
     */
    public function setDetailButtons(array $detailButtons)
    {
      $this->detailButtons = $detailButtons;
      return $this;
    }

}
