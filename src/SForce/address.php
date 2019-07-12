<?php

namespace SForce\Wsdl;

class address extends location
{
    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $country = null;

    /**
     * @var string
     */
    protected $countryCode = null;

    /**
     * @var string
     */
    protected $geocodeAccuracy = null;

    /**
     * @var string
     */
    protected $postalCode = null;

    /**
     * @var string
     */
    protected $state = null;

    /**
     * @var string
     */
    protected $stateCode = null;

    /**
     * @var string
     */
    protected $street = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return \SForce\Wsdl\address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return \SForce\Wsdl\address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \SForce\Wsdl\address
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGeocodeAccuracy()
    {
        return $this->geocodeAccuracy;
    }

    /**
     * @param string $geocodeAccuracy
     * @return \SForce\Wsdl\address
     */
    public function setGeocodeAccuracy($geocodeAccuracy)
    {
        $this->geocodeAccuracy = $geocodeAccuracy;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \SForce\Wsdl\address
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return \SForce\Wsdl\address
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * @param string $stateCode
     * @return \SForce\Wsdl\address
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return \SForce\Wsdl\address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }
}
