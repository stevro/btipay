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

    public static function parseErrorCode($errorCode)
    {
        switch ((int)$errorCode) {
            case self::SUCCESS:
                return 'Nicio eroare de sistem';
                break;
            case self::DUPLICATED_ORDER_NUMBER:
                return 'orderNumber duplicat, comanda cu numărul de comandă dat este deja procesată';
                break;
            case self::UNKNOWN_CURRENCY:
                return 'Valută necunoscută';
                break;
            case self::MISSING_REQUIRED_PARAMETERS:
                return 'Parametrul solicitării obligatorii nu a fost specificat';
                break;
            case self::INVALID_REQUEST_PARAMETER:
                return 'Valoare eronată a unui parametru din solicitare';
                break;
            case self::SYSTEM_ERROR:
                return 'Eroare de sistem';
                break;
            case self::ORDER_BUNDLE_ERROR:
                return 'Eroare in orderbundle';
                break;
            case self::ORDER_ID_NOT_REGISTERED:
                return 'Order ID nerecunoscut';
            case self::ORDER_REJECTED:
                return 'Comanda respinsa';
            case self::UNKNOWN:
            default:
                return 'Unknown';
                break;
        }
    }

}