<?php


namespace Stev\BTIPay\Util;


use Alcohol\ISO4217;
use League\ISO3166\ISO3166;
use Stev\BTIPay\Exceptions\InvalidValueException;
use Stev\BTIPay\Exceptions\RequiredValueException;
use Stev\BTIPay\Model\Order;

class Validator
{

    public static function validateOrder(Order $order)
    {
        self::validateRequired('order.username', $order->getUsername());
        self::validateRequired('order.password', $order->getPassword());
        self::validateRequired('order.orderNumber', $order->getOrderNumber());
        self::validateRequired('order.amount', $order->getAmount());
        self::validateRequired('order.currency', $order->getCurrency());
        self::validateRequired('order.returnUrl', $order->getReturnUrl());
        self::validateRequired('order.jsonParams', $order->getJsonParams());
        self::validateRequired('order.orderBundle', $order->getOrderBundle());

        $orderBundle = $order->getOrderBundle();
        self::validateRequired('orderBundle.orderCreationDate', $orderBundle->getOrderCreationDate());

        $customerDetails = $orderBundle->getCustomerDetails();
        self::validateRequired('orderBundle.customerDetails', $customerDetails);
        self::validateRequired('customerDetails.email', $customerDetails->getEmail());
        self::validateRequired('customerDetails.phone', $customerDetails->getPhone());

        $deliveryInfo = $customerDetails->getDeliveryInfo();
        if ($deliveryInfo) {
            self::validateRequired('deliveryInfo.deliveryType', $deliveryInfo->getDeliveryType());
            self::validateRequired('deliveryInfo.country', $deliveryInfo->getCountry());
            self::validateRequired('deliveryInfo.city', $deliveryInfo->getCity());
            self::validateRequired('deliveryInfo.postAddress', $deliveryInfo->getPostAddress());
        }

        $billingInfo = $customerDetails->getBillingInfo();
        self::validateRequired('customerDetails.billingInfo', $billingInfo);
        self::validateRequired('billingInfo.country', $billingInfo->getCountry());
        self::validateRequired('billingInfo.city', $billingInfo->getCity());
        self::validateRequired('billingInfo.postAddress', $billingInfo->getPostAddress());
    }

    /**
     * @param $property
     * @param $value
     * @throws RequiredValueException
     */
    public static function validateRequired($property, $value)
    {
        if (!$value) {
            throw new RequiredValueException($property, $value, 'Is required');
        }

        return $value;
    }

    public static function validateCountry($property, $country)
    {
        $iso = new ISO3166();

        try {
            $iso->numeric($country);
        } catch (\Exception $e) {
            throw new InvalidValueException($property, $country, 'Invalid country');
        }

        return $country;
    }

    public static function validateCurrency($property, $currency)
    {
        $iso = new ISO4217();
        try {
            $iso->getByNumeric($currency);
        } catch (\Exception $e) {
            throw new InvalidValueException($property, $currency, 'Invalid currency');
        }

        return $currency;
    }

    /**
     * @param string $email
     * @return string
     * @throws InvalidValueException
     */
    public static function validateEmail($property, $email)
    {
        $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$filteredEmail) {
            throw new InvalidValueException($property, $email, 'Invalid email');
        }

        return $filteredEmail;
    }

}