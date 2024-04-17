<?php

namespace Stev\BTIPay\Tests\Fixtures\Factories;

use DateTime;
use Stev\BTIPay\Model\BillingInfo;
use Stev\BTIPay\Model\CustomerDetails;
use Stev\BTIPay\Model\Order;
use Stev\BTIPay\Model\OrderBundle;

class OrderFactory
{
    public static function basicOrder(): Order
    {
        $currentDate = new DateTime();
        $order = new Order();
        $order->setOrderNumber(uniqid('F', false) . '/' . $currentDate->format('d-m-Y'))
            ->setDescription('Plata Fact F')
            ->setEmail('contact.webservice@gmail.com')
            ->setAmount(1000)
            ->setCurrencyAlpha3('RON')
            ->setReturnUrl("https://ecclients.btrl.ro:5443/payment/merchants/Test_BT/finish.html");

        $order->force3DSecure(true);

        $customerDetails = new CustomerDetails();
        $customerDetails->setEmail('contact.webservice@gmail.com')
            ->setPhone(40743333333)
            ->setContact('Stefan');

        $billingInfo = new BillingInfo();
        $billingInfo->setCountryAlpha2('RO')
            ->setCity('Iasi')
            ->setPostAddress('Elena Doamna 20-22');
        $customerDetails->setBillingInfo($billingInfo);

        $orderBundle = new OrderBundle($currentDate, $customerDetails);

        $order->setOrderBundle($orderBundle);
        return $order;
    }
}