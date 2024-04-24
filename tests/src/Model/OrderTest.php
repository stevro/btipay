<?php

namespace Stev\BTIPay\Tests\Model;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;
use Stev\BTIPay\Tests\Fixtures\Factories\OrderFactory;

use Stev\BTIPay\Util\Serializer;

use function PHPUnit\Framework\assertSame;

class OrderTest extends TestCase
{
    public function testSerialize()
    {
        $order = OrderFactory::basicOrder();
        $order->setOrderNumber('F661eaee8bf2a7/16-04-2024');
        $order->setUsername(BTIPAY_USERNAME);
        $order->setPassword(BTIPAY_PASSWORD);

        $serializer = Serializer::getSerializer();

        $orderJson = $serializer->serialize($order, 'json');
        assertSame(
            '{"userName":"test_iPay4_api","password":"test_iPay4_ap!r5t","orderNumber":"F661eaee8bf2a7\/16-04-2024","amount":1000,"currency":"946","returnUrl":"https:\/\/ecclients.btrl.ro:5443\/payment\/merchants\/Test_BT\/finish.html","description":"Plata Fact F","pageView":"DESKTOP","email":"contact.webservice@gmail.com"}',
            $orderJson
        );
        $requestData = $serializer->deserialize($orderJson, 'array', 'json');
        assertSame(
            [
                'userName' => 'test_iPay4_api',
                'password' => 'test_iPay4_ap!r5t',
                'orderNumber' => 'F661eaee8bf2a7/16-04-2024',
                'amount' => 1000,
                'currency' => '946',
                'returnUrl' => 'https://ecclients.btrl.ro:5443/payment/merchants/Test_BT/finish.html',
                'description' => 'Plata Fact F',
                'pageView' => 'DESKTOP',
                'email' => 'contact.webservice@gmail.com',
            ],
            $requestData
        );
    }
}
