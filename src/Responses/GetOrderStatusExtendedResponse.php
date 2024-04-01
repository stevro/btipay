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
    private string $orderNumber;

    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private ?int $orderStatus;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $actionCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $actionCodeDescription;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $amount;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $currency;

    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d H:i:s T', '','U'>")
     */
    private DateTime $date;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $orderDescription;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $ip;

    /**
     * @var int | null
     * @Serializer\Type("int")
     */
    private ?int $recurrenceId;

    /**
     * @var CardAuthInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\CardAuthInfo")
     */
    private CardAuthInfo $cardAuthInfo;

    /**
     * @var BindingInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\BindingInfo")
     */
    private BindingInfo $bindingInfo;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private array $merchantOrderParams = [];

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private array $attributes = [];

    /**
     * @var DateTime | null
     * @Serializer\Type("DateTime<'Y-m-d H:i:s T', '','U'>")
     */
    private ?DateTime $authDateTime;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $authRefNum;

    /**
     * @var string | null
     * @Serializer\Type("string")
     */
    private ?string $terminalId;

    /**
     * @var PaymentAmountInfo | null
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\PaymentAmountInfo")
     */
    private ?PaymentAmountInfo $paymentAmountInfo;

    /**
     * @var BankInfo
     * @Serializer\Type("Stev\BTIPay\Model\GetOrderStatusExtended\BankInfo")
     */
    private BankInfo $bankInfo;

    /**
     * @var OrderBundle
     * @Serializer\Type("Stev\BTIPay\Model\OrderBundle")
     */
    private OrderBundle $orderBundle;

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderNumber(string $orderNumber): static
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
     * @param int|null $orderStatus
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderStatus(?int $orderStatus): static
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * @return int
     */
    public function getActionCode(): int
    {
        return $this->actionCode;
    }

    /**
     * @param int $actionCode
     * @return GetOrderStatusExtendedResponse
     */
    public function setActionCode(int $actionCode): static
    {
        $this->actionCode = $actionCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getActionCodeDescription(): string
    {
        return $this->actionCodeDescription;
    }

    /**
     * @param string $actionCodeDescription
     * @return GetOrderStatusExtendedResponse
     */
    public function setActionCodeDescription(string $actionCodeDescription): static
    {
        $this->actionCodeDescription = $actionCodeDescription;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return GetOrderStatusExtendedResponse
     */
    public function setAmount(int $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getCurrency(): int|string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return GetOrderStatusExtendedResponse
     */
    public function setCurrency(string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return GetOrderStatusExtendedResponse
     */
    public function setDate(DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderDescription(): ?string
    {
        return $this->orderDescription;
    }

    /**
     * @param string|null $orderDescription
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderDescription(?string $orderDescription): static
    {
        $this->orderDescription = $orderDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return GetOrderStatusExtendedResponse
     */
    public function setIp(string $ip): static
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRecurrenceId(): ?int
    {
        return $this->recurrenceId;
    }

    /**
     * @param int|null $recurrenceId
     * @return GetOrderStatusExtendedResponse
     */
    public function setRecurrenceId(?int $recurrenceId): static
    {
        $this->recurrenceId = $recurrenceId;

        return $this;
    }

    /**
     * @return CardAuthInfo
     */
    public function getCardAuthInfo(): CardAuthInfo
    {
        return $this->cardAuthInfo;
    }

    /**
     * @param CardAuthInfo $cardAuthInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setCardAuthInfo(CardAuthInfo $cardAuthInfo): static
    {
        $this->cardAuthInfo = $cardAuthInfo;

        return $this;
    }

    /**
     * @return BindingInfo
     */
    public function getBindingInfo(): BindingInfo
    {
        return $this->bindingInfo;
    }

    /**
     * @param BindingInfo $bindingInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setBindingInfo(BindingInfo $bindingInfo): static
    {
        $this->bindingInfo = $bindingInfo;

        return $this;
    }

    /**
     * @return array
     */
    public function getMerchantOrderParams(): array
    {
        return $this->merchantOrderParams;
    }

    /**
     * @param array $merchantOrderParams
     * @return GetOrderStatusExtendedResponse
     */
    public function setMerchantOrderParams(array $merchantOrderParams): static
    {
        $this->merchantOrderParams = $merchantOrderParams;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return GetOrderStatusExtendedResponse
     */
    public function setAttributes(array $attributes): static
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getAuthDateTime(): ?DateTime
    {
        return $this->authDateTime;
    }

    /**
     * @param DateTime|null $authDateTime
     * @return GetOrderStatusExtendedResponse
     */
    public function setAuthDateTime(?DateTime $authDateTime): static
    {
        $this->authDateTime = $authDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthRefNum(): ?string
    {
        return $this->authRefNum;
    }

    /**
     * @param string|null $authRefNum
     * @return GetOrderStatusExtendedResponse
     */
    public function setAuthRefNum(?string $authRefNum): static
    {
        $this->authRefNum = $authRefNum;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }

    /**
     * @param string|null $terminalId
     * @return GetOrderStatusExtendedResponse
     */
    public function setTerminalId(?string $terminalId): static
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @return PaymentAmountInfo|null
     */
    public function getPaymentAmountInfo(): ?PaymentAmountInfo
    {
        return $this->paymentAmountInfo;
    }

    /**
     * @param PaymentAmountInfo|null $paymentAmountInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setPaymentAmountInfo(?PaymentAmountInfo $paymentAmountInfo): static
    {
        $this->paymentAmountInfo = $paymentAmountInfo;

        return $this;
    }

    /**
     * @return BankInfo
     */
    public function getBankInfo(): BankInfo
    {
        return $this->bankInfo;
    }

    /**
     * @param BankInfo $bankInfo
     * @return GetOrderStatusExtendedResponse
     */
    public function setBankInfo(BankInfo $bankInfo): static
    {
        $this->bankInfo = $bankInfo;

        return $this;
    }

    /**
     * @return OrderBundle
     */
    public function getOrderBundle(): OrderBundle
    {
        return $this->orderBundle;
    }

    /**
     * @param OrderBundle $orderBundle
     * @return GetOrderStatusExtendedResponse
     */
    public function setOrderBundle(OrderBundle $orderBundle): static
    {
        $this->orderBundle = $orderBundle;

        return $this;
    }

}