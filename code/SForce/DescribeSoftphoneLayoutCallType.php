<?php

namespace SForce\Wsdl;

class DescribeSoftphoneLayoutCallType
{

    /**
     * @var DescribeSoftphoneLayoutInfoField[] $infoFields
     */
    protected $infoFields = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var DescribeSoftphoneScreenPopOption[] $screenPopOptions
     */
    protected $screenPopOptions = null;

    /**
     * @var string $screenPopsOpenWithin
     */
    protected $screenPopsOpenWithin = null;

    /**
     * @var DescribeSoftphoneLayoutSection[] $sections
     */
    protected $sections = null;

    /**
     * @param DescribeSoftphoneLayoutInfoField[] $infoFields
     * @param string $name
     */
    public function __construct(array $infoFields = null, $name = null)
    {
      $this->infoFields = $infoFields;
      $this->name = $name;
    }

    /**
     * @return DescribeSoftphoneLayoutInfoField[]
     */
    public function getInfoFields()
    {
      return $this->infoFields;
    }

    /**
     * @param DescribeSoftphoneLayoutInfoField[] $infoFields
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutCallType
     */
    public function setInfoFields(array $infoFields)
    {
      $this->infoFields = $infoFields;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutCallType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return DescribeSoftphoneScreenPopOption[]
     */
    public function getScreenPopOptions()
    {
      return $this->screenPopOptions;
    }

    /**
     * @param DescribeSoftphoneScreenPopOption[] $screenPopOptions
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutCallType
     */
    public function setScreenPopOptions(array $screenPopOptions = null)
    {
      $this->screenPopOptions = $screenPopOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getScreenPopsOpenWithin()
    {
      return $this->screenPopsOpenWithin;
    }

    /**
     * @param string $screenPopsOpenWithin
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutCallType
     */
    public function setScreenPopsOpenWithin($screenPopsOpenWithin)
    {
      $this->screenPopsOpenWithin = $screenPopsOpenWithin;
      return $this;
    }

    /**
     * @return DescribeSoftphoneLayoutSection[]
     */
    public function getSections()
    {
      return $this->sections;
    }

    /**
     * @param DescribeSoftphoneLayoutSection[] $sections
     * @return \SForce\Wsdl\DescribeSoftphoneLayoutCallType
     */
    public function setSections(array $sections = null)
    {
      $this->sections = $sections;
      return $this;
    }

}
