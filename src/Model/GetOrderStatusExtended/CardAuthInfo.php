<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class CardAuthInfo
{

    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private ?int $expiration;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $pan;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $cardholderName;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $approvalCode;

    /**
     * @var SecureAuthInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\SecureAuthInfo")
     */
    private SecureAuthInfo $secureAuthInfo;

    /**
     * @return int|null
     */
    public function getExpiration(): ?int
    {
        return $this->expiration;
    }

    /**
     * @param int|null $expiration
     * @return CardAuthInfo
     */
    public function setExpiration(?int $expiration): static
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPan(): ?string
    {
        return $this->pan;
    }

    /**
     * @param string|null $pan
     * @return CardAuthInfo
     */
    public function setPan(?string $pan): static
    {
        $this->pan = $pan;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    /**
     * @param string|null $cardholderName
     * @return CardAuthInfo
     */
    public function setCardholderName(?string $cardholderName): static
    {
        $this->cardholderName = $cardholderName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    /**
     * @param string|null $approvalCode
     * @return CardAuthInfo
     */
    public function setApprovalCode(?string $approvalCode): static
    {
        $this->approvalCode = $approvalCode;

        return $this;
    }

    /**
     * @return SecureAuthInfo
     */
    public function getSecureAuthInfo(): SecureAuthInfo
    {
        return $this->secureAuthInfo;
    }

    /**
     * @param SecureAuthInfo $secureAuthInfo
     * @return CardAuthInfo
     */
    public function setSecureAuthInfo(SecureAuthInfo $secureAuthInfo): static
    {
        $this->secureAuthInfo = $secureAuthInfo;

        return $this;
    }

}