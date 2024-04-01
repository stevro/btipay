<?php

namespace Stev\BTIPay\Util;

class ErrorCodes
{

    public const UNKNOWN = -1;
    public const SUCCESS = 0;
    public const DUPLICATED_ORDER_NUMBER = 1;
    public const ORDER_REJECTED = 2;
    public const UNKNOWN_CURRENCY = 3;
    public const MISSING_REQUIRED_PARAMETERS = 4;
    public const INVALID_REQUEST_PARAMETER = 5;
    public const ORDER_ID_NOT_REGISTERED = 6;
    public const SYSTEM_ERROR = 7;
    public const ORDER_BUNDLE_ERROR = 8;

}