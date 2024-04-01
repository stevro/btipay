<?php

namespace Stev\BTIPay\Model;

use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Exceptions\InvalidValueException;
use Stev\BTIPay\Util\Countries;
use Stev\BTIPay\Util\Validator;

class BillingInfo
{

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $deliveryType;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $country;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $city;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $postAddress;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $postAddress2;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $postAddress3;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $postalCode;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $state;

    /**
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param string|null $deliveryType
     * @return BillingInfo
     */
    public function setDeliveryType(?string $deliveryType): static
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    /**
     * @return int
     */
    public function getCountry(): int
    {
        return $this->country;
    }

    /**
     * @param int $country
     * @return BillingInfo
     * @throws InvalidValueException
     */
    public function setCountry(int $country): static
    {
        $this->country = Validator::validateCountry('billingInfo.country', $country);

        return $this;
    }

    /**
     * @throws InvalidValueException
     */
    public function setCountryAlpha2($countryName): static
    {
        $this->setCountry(Countries::getCountryCodeByAlpha2($countryName));

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return BillingInfo
     */
    public function setCity(string $city): static
    {
        $this->city = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $city);

        return $this;
    }

    /**
     * @return string
     */
    public function getPostAddress(): string
    {
        return $this->postAddress;
    }

    /**
     * @param string $postAddress
     * @return BillingInfo
     */
    public function setPostAddress(string $postAddress): static
    {
        $this->postAddress = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $postAddress);

        if (strlen($this->postAddress) >= 50) {
            $this->postAddress = str_replace(array("\n", "\r"), ' ', substr($this->postAddress, 0, 49));
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostAddress2(): ?string
    {
        return $this->postAddress2;
    }

    /**
     * @param string|null $postAddress2
     * @return BillingInfo
     */
    public function setPostAddress2($postAddress2): static
    {
        $this->postAddress2 = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $postAddress2);

        if (strlen($this->postAddress2) >= 50) {
            $this->postAddress2 = str_replace(array("\n", "\r"), ' ', substr($this->postAddress2, 0, 49));
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostAddress3(): ?string
    {
        return $this->postAddress3;
    }

    /**
     * @param string|null $postAddress3
     * @return BillingInfo
     */
    public function setPostAddress3($postAddress3): static
    {
        $this->postAddress3 = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $postAddress3);

        if (strlen($this->postAddress3) >= 50) {
            $this->postAddress3 = str_replace(array("\n", "\r"), ' ', substr($this->postAddress3, 0, 49));
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     * @return BillingInfo
     */
    public function setPostalCode(?string $postalCode): static
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return BillingInfo
     */
    public function setState(?string $state): static
    {
        $this->state = $state;

        return $this;
    }
}
