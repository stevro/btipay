<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class CardAuthInfo
{

    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private $expiration;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $pan;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $cardholderName;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $approvalCode;

    /**
     * @var SecureAuthInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\SecureAuthInfo")
     */
    private $secureAuthInfo;

    /**
     * @return int|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param int|null $expiration
     * @return CardAuthInfo
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPan()
    {
        return $this->pan;
    }

    /**
     * @param string|null $pan
     * @return CardAuthInfo
     */
    public function setPan($pan)
    {
        $this->pan = $pan;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->cardholderName;
    }

    /**
     * @param string|null $cardholderName
     * @return CardAuthInfo
     */
    public function setCardholderName($cardholderName)
    {
        $this->cardholderName = $cardholderName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->approvalCode;
    }

    /**
     * @param string|null $approvalCode
     * @return CardAuthInfo
     */
    public function setApprovalCode($approvalCode)
    {
        $this->approvalCode = $approvalCode;

        return $this;
    }

    /**
     * @return SecureAuthInfo
     */
    public function getSecureAuthInfo()
    {
        return $this->secureAuthInfo;
    }

    /**
     * @param SecureAuthInfo $secureAuthInfo
     * @return CardAuthInfo
     */
    public function setSecureAuthInfo($secureAuthInfo)
    {
        $this->secureAuthInfo = $secureAuthInfo;

        return $this;
    }


}