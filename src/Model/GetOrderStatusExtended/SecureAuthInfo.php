<?php

namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class SecureAuthInfo
{

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $eci;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $threeDSInfo;

    /**
     * @return string|null
     */
    public function getEci(): ?string
    {
        return $this->eci;
    }

    /**
     * @param string|null $eci
     * @return SecureAuthInfo
     */
    public function setEci($eci): static
    {
        $this->eci = $eci;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getThreeDSInfo(): ?string
    {
        return $this->threeDSInfo;
    }

    /**
     * @param string|null $threeDSInfo
     * @return SecureAuthInfo
     */
    public function setThreeDSInfo($threeDSInfo): static
    {
        $this->threeDSInfo = $threeDSInfo;

        return $this;
    }

}
