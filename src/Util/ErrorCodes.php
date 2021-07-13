<?php

namespace Stev\BTIPay\Util;

class ErrorCodes
{

    const UNKNOWN = -1;
    const SUCCESS = 0;
    const DUPLICATED_ORDER_NUMBER = 1;
    const ORDER_REJECTED = 2;
    const UNKNOWN_CURRENCY = 3;
    const MISSING_REQUIRED_PARAMETERS = 4;
    const INVALID_REQUEST_PARAMETER = 5;
    const ORDER_ID_NOT_REGISTERED = 6;
    const SYSTEM_ERROR = 7;
    const ORDER_BUNDLE_ERROR = 8;

}