<?php

namespace SForce\Wsdl;

class DescribeSoftphoneScreenPopOption
{
    /**
     * @var string
     */
    protected $matchType = null;

    /**
     * @var string
     */
    protected $screenPopData = null;

    /**
     * @var string
     */
    protected $screenPopType = null;

    /**
     * @param string $matchType
     * @param string $screenPopData
     * @param string $screenPopType
     */
    public function __construct($matchType = null, $screenPopData = null, $screenPopType = null)
    {
        $this->matchType = $matchType;
        $this->screenPopData = $screenPopData;
        $this->screenPopType = $screenPopType;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    /**
     * @param string $matchType
     * @return \SForce\Wsdl\DescribeSoftphoneScreenPopOption
     */
    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * @return string
     */
    public function getScreenPopData()
    {
        return $this->screenPopData;
    }

    /**
     * @param string $screenPopData
     * @return \SForce\Wsdl\DescribeSoftphoneScreenPopOption
     */
    public function setScreenPopData($screenPopData)
    {
        $this->screenPopData = $screenPopData;
        return $this;
    }

    /**
     * @return string
     */
    public function getScreenPopType()
    {
        return $this->screenPopType;
    }

    /**
     * @param string $screenPopType
     * @return \SForce\Wsdl\DescribeSoftphoneScreenPopOption
     */
    public function setScreenPopType($screenPopType)
    {
        $this->screenPopType = $screenPopType;
        return $this;
    }
}
