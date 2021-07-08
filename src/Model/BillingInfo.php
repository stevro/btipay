<?php

namespace Stev\BTIPay\Model;

use Stev\BTIPay\Util\Countries;

class BillingInfo
{

    /**
     * @var string | null
     */
    private $deliveryType;
    /**
     * @var int
     */
    private $country;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $postAddress;
    /**
     * @var string | null
     */
    private $postAddress2;
    /**
     * @var string | null
     */
    private $postAddress3;
    /**
     * @var string | null
     */
    private $postalCode;
    /**
     * @var string | null
     */
    private $state;

    /**
     * @return string|null
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * @param string|null $deliveryType
     * @return BillingInfo
     */
    public function setDeliveryType($deliveryType)
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    /**
     * @return int
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param int $country
     * @return BillingInfo
     */
    public function setCountry($country)
    {
        $this->country = (int)$country;

        return $this;
    }

    public function setCountryAlpha2($countryName)
    {
        $this->setCountry(Countries::getCountryCodeByAlpha2($countryName));

        return $this;
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
     * @return BillingInfo
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostAddress()
    {
        return $this->postAddress;
    }

    /**
     * @param string $postAddress
     * @return BillingInfo
     */
    public function setPostAddress($postAddress)
    {
        $this->postAddress = $postAddress;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostAddress2()
    {
        return $this->postAddress2;
    }

    /**
     * @param string|null $postAddress2
     * @return BillingInfo
     */
    public function setPostAddress2($postAddress2)
    {
        $this->postAddress2 = $postAddress2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostAddress3()
    {
        return $this->postAddress3;
    }

    /**
     * @param string|null $postAddress3
     * @return BillingInfo
     */
    public function setPostAddress3($postAddress3)
    {
        $this->postAddress3 = $postAddress3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     * @return BillingInfo
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return BillingInfo
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }


}