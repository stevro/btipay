<?php

namespace Stev\BTIPay\Requests;


class RegisterPreAuth extends BaseRegisterRequest
{

    protected string $url = '/payment/rest/registerPreAuth.do';

}