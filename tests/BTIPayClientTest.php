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
        $order->setOrderNumber(uniqid('F', false).'/'.$currentDate->format('d-m-Y'))
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

        $btClient = new BTIPayClient('test_iPay2_api', 'test_iPay2_api1', true);

        try {
            $response = $btClient->register($order);
        } catch (\Stev\BTIPay\Exceptions\ValidationException $exception) {
            print_r(
                [
                    'property' => $exception->getProperty(),
                    'value' => $exception->getValue(),
                    'message' => $exception->getMessage(),
                ]
            );
            $this->fail();
        }

        print_r($response);

        $this->assertEquals(ErrorCodes::SUCCESS, $response->getErrorCode());
        $this->assertNotEmpty($response->getFormUrl());
    }

}
