<?php

namespace Stev\BTIPay\Model;

use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Util\Countries;
use Stev\BTIPay\Util\Validator;

class BillingInfo
{

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $deliveryType;
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $country;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $city;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $postAddress;
    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $postAddress2;
    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $postAddress3;
    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $postalCode;
    /**
     * @var string | null
     * @Serializer\Type("string")
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
        $this->country = Validator::validateCountry('billingInfo.country',$country);

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
        $this->city = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $city);

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
        $this->postAddress = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $postAddress);

        if(strlen($this->postAddress) >= 50){
            $this->postAddress = str_replace(array("\n","\r"), ' ', substr($this->postAddress,0,49));
        }

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
        $this->postAddress2 = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $postAddress2);

        if(strlen($this->postAddress2) >= 50){
            $this->postAddress2 = str_replace(array("\n","\r"), ' ', substr($this->postAddress2,0,49));
        }

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
        $this->postAddress3 = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $postAddress3);

        if(strlen($this->postAddress3) >= 50){
            $this->postAddress3 = str_replace(array("\n","\r"), ' ', substr($this->postAddress3,0,49));
        }

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
