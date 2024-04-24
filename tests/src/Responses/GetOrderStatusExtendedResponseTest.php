<?php

namespace Stev\BTIPay\Tests\Responses;

use PHPUnit\Framework\TestCase;
use Stev\BTIPay\Responses\GetOrderStatusExtendedResponse;
use Stev\BTIPay\Util\Serializer;

use function PHPUnit\Framework\assertInstanceOf;

class GetOrderStatusExtendedResponseTest extends TestCase
{

    public function test_deserialize()
    {
        $responseBody = '{"errorCode":"0","errorMessage":"Success","orderNumber":"301942","orderStatus":2,"actionCode":0,"actionCodeDescription":"Request processed successfully","amount":1000,"currency":"946","date":1713957628364,"orderDescription":"Plata Maratonul Dragomirnei 2024 [#1713957440-584841]","ip":"84.247.72.178","merchantOrderParams":[{"name":"numberTime","value":"16.961"},{"name":"FORCE_3DS2","value":"true"},{"name":"discountedAmount"},{"name":"paymentTime","value":"201.794"}],"attributes":[{"name":"mdOrder","value":"4b8a78e0-8752-40fe-a9bc-d4472b9768b8"}],"cardAuthInfo":{"expiration":"202704","cardholderName":"Gabriel Solomon","approvalCode":"582646","pan":"425603**5616"},"authDateTime":1713957857011,"terminalId":"03414IER","authRefNum":"411511023830","paymentAmountInfo":{"paymentState":"DEPOSITED","approvedAmount":1000,"depositedAmount":1000,"refundedAmount":0},"bankInfo":{"bankName":"ING BANK N.V. AMSTERDAM - BUCH","bankCountryCode":"RO","bankCountryName":"Romania"},"orderBundle":{"orderCreationDate":1713957628000,"customerDetails":{"email":"solomongaby@gmail.com","phone":"741040219","contact":"Gabriel Solomon","billingInfo":{"country":"642","city":"----","postAddress":"Str. ....."}}},"chargeback":false,"cofOriginalTransactionId":"484115410572523"}';
        $serializer = Serializer::getSerializer();

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
