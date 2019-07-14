<?php

namespace SForce\Wsdl;

class location
{
    /**
     * @var float
     */
    protected $latitude = null;

    /**
     * @var float
     */
    protected $longitude = null;

    public function __construct()
    {
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return \SForce\Wsdl\location
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return \SForce\Wsdl\location
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
}
