<?php

namespace Stev\BTIPay;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Stev\BTIPay\Exceptions\RequiredValueException;
use Stev\BTIPay\Model\Order;
use Stev\BTIPay\Requests\GetOrderStatusExtended;
use Stev\BTIPay\Requests\Register;
use Stev\BTIPay\Requests\RegisterPreAuth;
use Stev\BTIPay\Responses\RegisterResponse;
use Stev\BTIPay\Util\Validator;

class BTIPayClient
{


    /**
     * @var string
     */
    protected string $username;
    /**
     * @var string
     */
    protected string $password;

    /**
     * @var bool
     */
    protected bool $isTest = true;

    /**
     * BTIPayClient constructor.
     * @param $username
     * @param $password
     * @param bool $isTest
     */
    public function __construct($username, $password, bool $isTest = true)
    {
        $this->username = $username;
        $this->password = $password;
        $this->isTest = $isTest;
    }

    /**
     * @param Order $order
     * @return RegisterResponse
     * @throws RequiredValueException
     * @throws GuzzleException
     */
    public function register(Order $order): RegisterResponse
    {
        $registerRequest = new Register($this->isTest);

        $order->setUsername($this->username);
        $order->setPassword($this->password);

        Validator::validateOrder($order);

        return $registerRequest->sendRequest($order);
    }

    /**
     * @param Order $order
     * @return RegisterResponse
     * @throws RequiredValueException
     * @throws GuzzleException
     */
    public function registerPreAuth(Order $order): RegisterResponse
    {
        $registerRequest = new RegisterPreAuth($this->isTest);

        $order->setUsername($this->username);
        $order->setPassword($this->password);

        Validator::validateOrder($order);

        return $registerRequest->sendRequest($order);
    }

    /**
     * @param $orderId
     * @return Responses\GetOrderStatusExtendedResponse
     * @throws Exceptions\RequiredValueException
     * @throws GuzzleException
     */
    public function getOrderStatusExtendedByOrderId($orderId): Responses\GetOrderStatusExtendedResponse
    {
        $getOrderStatusRequest = new GetOrderStatusExtended($this->isTest);

        Validator::validateRequired('orderId', $orderId);

        return $getOrderStatusRequest->sendRequest(
            ['userName' => $this->username, 'password' => $this->password, 'orderId' => $orderId]
        );
    }

    /**
     * @param $orderNumber
     * @return Responses\GetOrderStatusExtendedResponse
     * @throws Exceptions\RequiredValueException
     * @throws GuzzleException
     */
    public function getOrderStatusExtendedByOrderNumber($orderNumber): Responses\GetOrderStatusExtendedResponse
    {
        $getOrderStatusRequest = new GetOrderStatusExtended($this->isTest);

        Validator::validateRequired('orderNumber', $orderNumber);

        return $getOrderStatusRequest->sendRequest(
            ['userName' => $this->username, 'password' => $this->password, 'orderNumber' => $orderNumber]
        );
    }

    /**
     * @throws Exception
     */
    public function refund()
    {
        throw new Exception("Not implemented yet");
    }

    /**
     * @throws Exception
     */
    public function reverse()
    {
        throw new Exception("Not implemented yet");
    }

    /**
     * @throws Exception
     */
    public function deposit()
    {
        throw new Exception("Not implemented yet");
    }
}
