<?php

namespace Stev\BTIPay\Requests;

use Stev\BTIPay\Model\Order;
use Stev\BTIPay\Responses\ResponseInterface;

interface RegisterRequestInterface
{

    /**
     * @param Order $order
     * @param $username
     * @param $password
     * @param bool $isTest
     * @return ResponseInterface
     */
    public function sendRequest(Order $order);

}