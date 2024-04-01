<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class BankInfo
{

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $bankName;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $bankCountryCode;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $bankCountryName;

    /**
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * @param string|null $bankName
     * @return self
     */
    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankCountryCode(): ?string
    {
        return $this->bankCountryCode;
    }

    /**
     * @param string|null $bankCountryCode
     * @return self
     */
    public function setBankCountryCode(?string $bankCountryCode): self
    {
        $this->bankCountryCode = $bankCountryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankCountryName(): ?string
    {
        return $this->bankCountryName;
    }

    /**
     * @param string|null $bankCountryName
     * @return self
     */
    public function setBankCountryName(?string $bankCountryName): self
    {
        $this->bankCountryName = $bankCountryName;

        return $this;
    }
}