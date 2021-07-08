<?php


use PHPUnit\Framework\TestCase;
use Stev\BTIPay\BTIPayClient;
use Stev\BTIPay\Model\BillingInfo;
use Stev\BTIPay\Model\CustomerDetails;
use Stev\BTIPay\Model\Order;
use Stev\BTIPay\Model\OrderBundle;
use Stev\BTIPay\Util\ErrorCodes;

final class BTIPayClientTest extends TestCase
{

    public function testRegisterSuccessful()
    {
        Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');


        $currentDate = new \DateTime();
        $order = new Order();
        $order->setOrderNumber('F1/'.$currentDate->format('d-m-Y'));
        $order->setEmail('contact.webservice@gmail.com');
        $order->setAmount(100);
        $order->setCurrencyAlpha3('RON');
        $order->setReturnUrl("https://ecclients.btrl.ro:5443/payment/merchants/Test_BT/finish.html");

        $order->force3DSecure(true);

        $customerDetails = new CustomerDetails();
        $customerDetails->setEmail('contact.webservice@gmail.com');
        $customerDetails->setPhone(40743330190);
        $customerDetails->setContact('Stefan');

        $billingInfo = new BillingInfo();
        $billingInfo->setCountryAlpha2('RO');
        $billingInfo->setCity('Iasi');
        $billingInfo->setPostAddress('Elena Doamna 20-22');
        $customerDetails->setBillingInfo($billingInfo);

        $orderBundle = new OrderBundle($currentDate, $customerDetails);

        $order->setOrderBundle($orderBundle);

        $btClient = new BTIPayClient('test_iPay2_api', 'test_iPay2_api1', true);

        $response = $btClient->register($order);

        $this->assertEquals(ErrorCodes::SUCCESS, $response->getErrorCode());
        $this->assertNotEmpty($response->getFormUrl());
    }

}
