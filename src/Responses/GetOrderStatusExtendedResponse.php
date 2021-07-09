<?php


namespace Stev\BTIPay\Responses;


use DateTime;
use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Model\GetOrderStatusExtended\BankInfo;
use Stev\BTIPay\Model\GetOrderStatusExtended\BindingInfo;
use Stev\BTIPay\Model\GetOrderStatusExtended\CardAuthInfo;
use Stev\BTIPay\Model\GetOrderStatusExtended\PaymentAmountInfo;
use Stev\BTIPay\Model\OrderBundle;

class GetOrderStatusExtendedResponse extends BaseResponse
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $orderNumber;

    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private $orderStatus;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $actionCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $actionCodeDescription;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $amount;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private $currency;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s T', '','U'>")
     */
    private $date;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $orderDescription;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $ip;
    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private $recurrenceId;

    /**
     * @var CardAuthInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\CardAuthInfo")
     */
    private $cardAuthInfo;

    /**
     * @var BindingInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\BindingInfo")
     */
    private $bindingInfo;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private $merchantOrderParams = [];
    /**
     * @var array
     * @Serializer\Type("array")
     */
    private $attributes = [];

    /**
     * @var DateTime | null
     * @Serializer\Type("DateTime<'Y-m-d H:i:s T', '','U'>")
     */
    private $authDateTime;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $authRefNum;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private $terminalId;

    /**
     * @var PaymentAmountInfo | null
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\PaymentAmountInfo")
     */
    private $paymentAmountInfo;

    /**
     * @var BankInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\BankInfo")
     */
    private $bankInfo;

    /**
     * @var OrderBundle
     * @Serializer\Type("Stev\BTIPay\Model\OrderBundle")
     */
    private $orderBundle;

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param int|null $orderStatus
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * @return int
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * @param int $actionCode
     * @return GetOrderStatusExtendedResponse
     */
    public function setActionCode($actionCode)
    {
        $this->actionCode = $actionCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getActionCodeDescription()
    {
        return $this->actionCodeDescription;
    }

    /**
     * @param string $actionCodeDescription
     * @return GetOrderStatusExtendedResponse
     */
    public function setActionCodeDescription($actionCodeDescription)
    {
        $this->actionCodeDescription = $actionCodeDescription;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return GetOrderStatusExtendedResponse
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return GetOrderStatusExtendedResponse
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return GetOrderStatusExtendedResponse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * @param string|null $orderDescription
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return GetOrderStatusExtendedResponse
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRecurrenceId()
    {
        return $this->recurrenceId;
    }

    /**
     * @param int|null $recurrenceId
     * @return GetOrderStatusExtendedResponse
     */
    public function setRecurrenceId($recurrenceId)
    {
        $this->recurrenceId = $recurrenceId;

        return $this;
    }

    /**
     * @return CardAuthInfo
     */
    public function getCardAuthInfo()
    {
        return $this->cardAuthInfo;
    }

    /**
     * @param CardAuthInfo $cardAuthInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setCardAuthInfo($cardAuthInfo)
    {
        $this->cardAuthInfo = $cardAuthInfo;

        return $this;
    }

    /**
     * @return BindingInfo
     */
    public function getBindingInfo()
    {
        return $this->bindingInfo;
    }

    /**
     * @param BindingInfo $bindingInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setBindingInfo($bindingInfo)
    {
        $this->bindingInfo = $bindingInfo;

        return $this;
    }

    /**
     * @return array
     */
    public function getMerchantOrderParams()
    {
        return $this->merchantOrderParams;
    }

    /**
     * @param array $merchantOrderParams
     * @return GetOrderStatusExtendedResponse
     */
    public function setMerchantOrderParams($merchantOrderParams)
    {
        $this->merchantOrderParams = $merchantOrderParams;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return GetOrderStatusExtendedResponse
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAuthDateTime()
    {
        return $this->authDateTime;
    }

    /**
     * @param DateTime|null $authDateTime
     * @return GetOrderStatusExtendedResponse
     */
    public function setAuthDateTime($authDateTime)
    {
        $this->authDateTime = $authDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthRefNum()
    {
        return $this->authRefNum;
    }

    /**
     * @param string|null $authRefNum
     * @return GetOrderStatusExtendedResponse
     */
    public function setAuthRefNum($authRefNum)
    {
        $this->authRefNum = $authRefNum;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @param string|null $terminalId
     * @return GetOrderStatusExtendedResponse
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @return PaymentAmountInfo|null
     */
    public function getPaymentAmountInfo()
    {
        return $this->paymentAmountInfo;
    }

    /**
     * @param PaymentAmountInfo|null $paymentAmountInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setPaymentAmountInfo($paymentAmountInfo)
    {
        $this->paymentAmountInfo = $paymentAmountInfo;

        return $this;
    }

    /**
     * @return BankInfo
     */
    public function getBankInfo()
    {
        return $this->bankInfo;
    }

    /**
     * @param BankInfo $bankInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setBankInfo($bankInfo)
    {
        $this->bankInfo = $bankInfo;

        return $this;
    }

    /**
     * @return OrderBundle
     */
    public function getOrderBundle()
    {
        return $this->orderBundle;
    }

    /**
     * @param OrderBundle $orderBundle
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderBundle($orderBundle)
    {
        $this->orderBundle = $orderBundle;

        return $this;
    }

}