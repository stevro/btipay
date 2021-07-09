<?php


namespace Stev\BTIPay\Model\GetOrderStatusExtended;


use JMS\Serializer\Annotation as Serializer;

class BankInfo
{

    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private $bankName;
    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private $bankCountryCode;
    /**
     * @var string | null
     *  @Serializer\Type("string")
     */
    private $bankCountryName;

    /**
     * @return string|null
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string|null $bankName
     * @return BankInfo
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankCountryCode()
    {
        return $this->bankCountryCode;
    }

    /**
     * @param string|null $bankCountryCode
     * @return BankInfo
     */
    public function setBankCountryCode($bankCountryCode)
    {
        $this->bankCountryCode = $bankCountryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankCountryName()
    {
        return $this->bankCountryName;
    }

    /**
     * @param string|null $bankCountryName
     * @return BankInfo
     */
    public function setBankCountryName($bankCountryName)
    {
        $this->bankCountryName = $bankCountryName;

        return $this;
    }



}