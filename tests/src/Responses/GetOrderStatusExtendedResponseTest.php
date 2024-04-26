<?php

namespace Stev\BTIPay\Tests\Responses;

use PHPUnit\Framework\TestCase;
use Stev\BTIPay\Responses\GetOrderStatusExtendedResponse;
use Stev\BTIPay\Serializer\SerializerFactory;

use function PHPUnit\Framework\assertInstanceOf;

class GetOrderStatusExtendedResponseTest extends TestCase
{

    public function test_deserialize()
    {
        $responseBody = file_get_contents(TESTS_FIXTURE_PATH.'/responses/OrderStatus/basic.json');
        $serializer = SerializerFactory::getSerializer();

        $response = $serializer->deserialize($responseBody, GetOrderStatusExtendedResponse::class, 'json');

        self::assertInstanceOf(GetOrderStatusExtendedResponse::class, $response);
        self::assertEquals(0, $response->getErrorCode());
        self::assertEquals('Success', $response->getErrorMessage());
        self::assertEquals('301942', $response->getOrderNumber());

        assertInstanceOf(\DateTime::class, $response->getDate());
        self::assertEquals(1713957628364, $response->getDate()->getTimestamp());

        $paymentAmountInfo = $response->getPaymentAmountInfo();
        self::assertEquals(1000, $paymentAmountInfo->getApprovedAmount());
        self::assertEquals('DEPOSITED', $paymentAmountInfo->getPaymentState());
    }
}
