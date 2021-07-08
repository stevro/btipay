<?php

namespace Stev\BTIPay;

use Stev\BTIPay\Model\Order;
use Stev\BTIPay\Requests\Register;
use Stev\BTIPay\Requests\RegisterPreAuth;
use Stev\BTIPay\Responses\RegisterResponse;
use Stev\BTIPay\Responses\ResponseInterface;

class BTIPayClient
{


    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $password;

    /**
     * @var bool
     */
    protected $isTest = true;

    /**
     * BTIPayClient constructor.
     * @param $username
     * @param $password
     * @param bool $isTest
     */
    public function __construct($username, $password, $isTest = true)
    {
        $this->username = $username;
        $this->password = $password;
        $this->isTest = $isTest;
    }

    /**
     * @param Order $order
     * @return RegisterResponse
     */
    public function register(Order $order)
    {
        $registerRequest = new Register($this->isTest);

        $order->setUsername($this->username);
        $order->setPassword($this->password);

        return $registerRequest->sendRequest($order);
    }

    /**
     * @param Order $order
     * @return RegisterResponse
     */
    public function registerPreAuth(Order $order)
    {
        $registerRequest = new RegisterPreAuth();

        return $registerRequest->sendRequest($order);
    }

    public function getOrderStatusExtended()
    {
    }

    public function refund()
    {
    }

    public function reverse()
    {
    }

    public function deposit()
    {
    }
}