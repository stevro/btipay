<?php

namespace Stev\BTIPay\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Exceptions\InvalidValueException;
use Stev\BTIPay\Util\Currency;
use Stev\BTIPay\Util\Validator;

/**
 * Class Order
 * @package Stev\BTIPay\Model
 *
 * @Serializer\ExclusionPolicy("all")
 */
class Order
{

    public const PAGE_VIEW_DESKTOP = 'DESKTOP';

    public const PAGE_VIEW_MOBILE = 'MOBILE';

    /**
     * @var string
     * @Serializer\Expose
     * @Serializer\SerializedName("userName")
     */
    private string $username;

    /**
     * @var string
     * @Serializer\Expose
     */
    private string $password;

    /**
     * @var string
     * @Serializer\Expose
     */
    private string $orderNumber;

    /**
     * @var int
     * @Serializer\Expose
     */
    private int $amount;
    /**
     * @var string
     * @Serializer\Expose
     */
    private string $currency;

    /**
     * @var string
     * @Serializer\Expose
     */
    private string $returnUrl;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private ?string $description;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private ?string $language;

    /**
     * @var int | null
     * @Serializer\Expose
     */
    private ?int $installment;

    /**
     * @var string
     * @Serializer\Expose
     */
    private string $pageView = self::PAGE_VIEW_DESKTOP;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private ?string $email;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private ?string $recurrenceType;

    /**
     * @var DateTime | null
     * @Serializer\Expose
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private ?DateTime $recurrenceStartDate;

    /**
     * @var DateTime | null
     * @Serializer\Expose
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private ?DateTime $recurrenceEndDate;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private ?string $childId;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private ?string $clientId;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private ?string $bindingId;

    /**
     * @var array
     */
    private array $jsonParams = [];

    /**
     * @var OrderBundle
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
     * @return Order
     */
    public function setOrderNumber(string $orderNumber): static
    {
        $this->orderNumber = $orderNumber;

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
     * @return Order
     */
    public function setAmount(int $amount): static
    {
        $this->amount = (int)$amount;

        return $this;
    }

    public function setAmountInMainUnit($amount): static
    {
        $this->amount = $amount * 100;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Order
     * @throws InvalidValueException
     */
    public function setCurrency(string $currency): static
    {
        $this->currency = Validator::validateCurrency('order.currency', $currency);

        return $this;
    }

    /**
     * @throws InvalidValueException
     */
    public function setCurrencyAlpha3($currency): static
    {
        $this->setCurrency(Currency::getCurrencyNumericCode($currency));

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     * @return Order
     */
    public function setReturnUrl(string $returnUrl): static
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Order
     */
    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return Order
     */
    public function setLanguage(?string $language): static
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return int
     */
    public function getInstallment(): ?int
    {
        return $this->installment;
    }

    /**
     * @param int $installment
     * @return Order
     */
    public function setInstallment(int $installment): static
    {
        $this->installment = $installment;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageView(): string
    {
        return $this->pageView;
    }

    /**
     * @param string $pageView
     * @return Order
     */
    public function setPageView(string $pageView): static
    {
        $this->pageView = $pageView;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Order
     * @throws InvalidValueException
     */
    public function setEmail(?string $email): static
    {
        if (null !== $email) {
            $this->email = Validator::validateEmail('order.email', $email);
        } else {
            $this->email = $email;
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecurrenceType(): ?string
    {
        return $this->recurrenceType;
    }

    /**
     * @param string|null $recurrenceType
     * @return Order
     */
    public function setRecurrenceType(?string $recurrenceType): static
    {
        $this->recurrenceType = $recurrenceType;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getRecurrenceStartDate(): ?DateTime
    {
        return $this->recurrenceStartDate;
    }

    /**
     * @param DateTime|null $recurrenceStartDate
     * @return Order
     */
    public function setRecurrenceStartDate(DateTime $recurrenceStartDate = null): static
    {
        $this->recurrenceStartDate = $recurrenceStartDate;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getRecurrenceEndDate(): ?DateTime
    {
        return $this->recurrenceEndDate;
    }

    /**
     * @param DateTime|null $recurrenceEndDate
     * @return Order
     */
    public function setRecurrenceEndDate(DateTime $recurrenceEndDate = null): static
    {
        $this->recurrenceEndDate = $recurrenceEndDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getChildId(): ?string
    {
        return $this->childId;
    }

    /**
     * @param string|null $childId
     * @return Order
     */
    public function setChildId(?string $childId): static
    {
        $this->childId = $childId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     * @return Order
     */
    public function setClientId(?string $clientId): static
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBindingId(): ?string
    {
        return $this->bindingId;
    }

    /**
     * @param string|null $bindingId
     * @return Order
     */
    public function setBindingId(?string $bindingId): static
    {
        $this->bindingId = $bindingId;

        return $this;
    }

    /**
     * @return array
     */
    public function getJsonParams(): array
    {
        return $this->jsonParams;
    }

    /**
     * @param array $jsonParams
     * @return Order
     */
    public function setJsonParams(array $jsonParams = []): static
    {
        $this->jsonParams = $jsonParams;

        return $this;
    }

    public function force3DSecure($use): static
    {
        $this->jsonParams['FORCE_3DS2'] = ($use === true ? 'true' : 'false');

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
     * @return Order
     */
    public function setOrderBundle(OrderBundle $orderBundle): static
    {
        $this->orderBundle = $orderBundle;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Order
     */
    public function setUsername($username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Order
     */
    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

}