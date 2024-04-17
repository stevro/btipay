<?php

namespace Stev\BTIPay\Tests;

use PHPUnit\Framework\TestCase;
use Stev\BTIPay\BTIPayClient;
use Stev\BTIPay\Exceptions\ValidationException;
use Stev\BTIPay\Tests\Fixtures\Factories\OrderFactory;
use Stev\BTIPay\Util\ActionCodes;
use Stev\BTIPay\Util\ErrorCodes;

final class BTIPayClientTest extends TestCase
{
    protected static $orderIdCreated = null;

    public function testRegisterSuccessful()
    {
        $order = OrderFactory::basicOrder();

        $btClient = new BTIPayClient(BTIPAY_USERNAME, BTIPAY_PASSWORD, true);

        try {
            $response = $btClient->register($order);
        } catch (ValidationException $exception) {
            $this->fail(
                print_r(
                    [
                        'property' => $exception->getProperty(),
                        'value' => $exception->getValue(),
                        'message' => $exception->getMessage(),
                    ],
                    true
                )
            );
        }

//        print_r($response);

        $this->assertEquals(ErrorCodes::SUCCESS, $response->getErrorCode());
        $this->assertNotEmpty($response->getFormUrl());

        self::$orderIdCreated = $response->getOrderId();
    }

    public function testGetOrderStatusExtendedSuccessful()
    {
        $btClient = new BTIPayClient(BTIPAY_USERNAME, BTIPAY_PASSWORD, true);

        if (self::$orderIdCreated === null) {
            //Run the previous test and finish the payment, then copy the orderId here
            $this->fail('You need to run the previous test first');
        }

        try {
            $response = $btClient->getOrderStatusExtendedByOrderId(self::$orderIdCreated);
        } catch (ValidationException $exception) {
            $this->fail(
                print_r(
                    [
                        'property' => $exception->getProperty(),
                        'value' => $exception->getValue(),
                        'message' => $exception->getMessage(),
                    ],
                    true
                )
            );
        }

//        print_r($response);

        $this->assertEquals(ErrorCodes::SUCCESS, $response->getErrorCode());
        $this->assertEquals(ActionCodes::ACTION_CODE_NO_PAYMENT_ATTEMPTS, $response->getActionCode());
    }

}
