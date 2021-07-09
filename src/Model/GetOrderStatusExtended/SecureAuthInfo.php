<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class SecureAuthInfo
{

    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private $eci;
    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private $threeDSInfo;

    /**
     * @return string|null
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string|null $eci
     * @return SecureAuthInfo
     */
    public function setEci($eci)
    {
        $this->eci = $eci;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getThreeDSInfo()
    {
        return $this->threeDSInfo;
    }

    /**
     * @param string|null $threeDSInfo
     * @return SecureAuthInfo
     */
    public function setThreeDSInfo($threeDSInfo)
    {
        $this->threeDSInfo = $threeDSInfo;

        return $this;
    }


}