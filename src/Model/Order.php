<?php

namespace Stev\BTIPay\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;
use Stev\BTIPay\Util\Currency;

/**
 * Class Order
 * @package Stev\BTIPay\Model
 *
 * @Serializer\ExclusionPolicy("all")
 */
class Order
{

    const PAGE_VIEW_DESKTOP = 'DESKTOP';
    const PAGE_VIEW_MOBILE = 'MOBILE';

    /**
     * @var string
     * @Serializer\Expose
     * @Serializer\SerializedName("userName")
     */
    private $username;

    /**
     * @var string
     * @Serializer\Expose
     */
    private $password;

    /**
     * @var string
     * @Serializer\Expose
     */
    private $orderNumber;
    /**
     * @var int
     * @Serializer\Expose
     */
    private $amount;
    /**
     * @var string
     * @Serializer\Expose
     */
    private $currency;
    /**
     * @var string
     * @Serializer\Expose
     */
    private $returnUrl;
    /**
     * @var string | null
     * @Serializer\Expose
     */
    private $description;
    /**
     * @var string | null
     * @Serializer\Expose
     */
    private $language;
    /**
     * @var int | null
     * @Serializer\Expose
     */
    private $installment;
    /**
     * @var string
     * @Serializer\Expose
     */
    private $pageView = self::PAGE_VIEW_DESKTOP;

    /**
     * @var string | null
     * @Serializer\Expose
     */
    private $email;
    /**
     * @var string | null
     * @Serializer\Expose
     */
    private $recurrenceType;
    /**
     * @var DateTime | null
     * @Serializer\Expose
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private $recurrenceStartDate;
    /**
     * @var DateTime | null
     * @Serializer\Expose
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private $recurrenceEndDate;
    /**
     * @var string | null
     * @Serializer\Expose
     */
    private $childId;
    /**
     * @var string | null
     * @Serializer\Expose
     */
    private $clientId;
    /**
     * @var string | null
     * @Serializer\Expose
     */
    private $bindingId;
    /**
     * @var array
     */
    private $jsonParams = [];

    /**
     * @var OrderBundle
     *
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
     * @return Order
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

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
     * @return Order
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
     * @return Order
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    public function setCurrencyAlpha3($currency)
    {
        $this->setCurrency(Currency::getCurrencyNumericCode($currency));

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     * @return Order
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Order
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return Order
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return int
     */
    public function getInstallment()
    {
        return $this->installment;
    }

    /**
     * @param int $installment
     * @return Order
     */
    public function setInstallment($installment)
    {
        $this->installment = $installment;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageView()
    {
        return $this->pageView;
    }

    /**
     * @param string $pageView
     * @return Order
     */
    public function setPageView($pageView)
    {
        $this->pageView = $pageView;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Order
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecurrenceType()
    {
        return $this->recurrenceType;
    }

    /**
     * @param string|null $recurrenceType
     * @return Order
     */
    public function setRecurrenceType($recurrenceType)
    {
        $this->recurrenceType = $recurrenceType;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getRecurrenceStartDate()
    {
        return $this->recurrenceStartDate;
    }

    /**
     * @param DateTime|null $recurrenceStartDate
     * @return Order
     */
    public function setRecurrenceStartDate(DateTime $recurrenceStartDate = null)
    {
        $this->recurrenceStartDate = $recurrenceStartDate;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getRecurrenceEndDate()
    {
        return $this->recurrenceEndDate;
    }

    /**
     * @param DateTime|null $recurrenceEndDate
     * @return Order
     */
    public function setRecurrenceEndDate(DateTime $recurrenceEndDate = null)
    {
        $this->recurrenceEndDate = $recurrenceEndDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getChildId()
    {
        return $this->childId;
    }

    /**
     * @param string|null $childId
     * @return Order
     */
    public function setChildId($childId)
    {
        $this->childId = $childId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     * @return Order
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBindingId()
    {
        return $this->bindingId;
    }

    /**
     * @param string|null $bindingId
     * @return Order
     */
    public function setBindingId($bindingId)
    {
        $this->bindingId = $bindingId;

        return $this;
    }

    /**
     * @return array
     */
    public function getJsonParams()
    {
        return $this->jsonParams;
    }

    /**
     * @param array $jsonParams
     * @return Order
     */
    public function setJsonParams(array $jsonParams = [])
    {
        $this->jsonParams = $jsonParams;

        return $this;
    }

    public function force3DSecure($use)
    {
        $this->jsonParams['FORCE_3DS2'] = ($use === true ? 'true' : 'false');
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
     * @return Order
     */
    public function setOrderBundle(OrderBundle $orderBundle)
    {
        $this->orderBundle = $orderBundle;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Order
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Order
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}