<?php


namespace Stev\BTIPay\Util;


class OrderStatuses
{

    const STATUS_REGISTERED_BUT_NOT_PAID = 0;
    const STATUS_PRE_AUTH_HELD = 1;
    const STATUS_DEPOSITED_SUCCESSFULLY = 2;
    const STATUS_AUTH_REVERSED = 3;
    const STATUS_REFUNDED = 4;
    const STATUS_AUTH_ACS_INIATED = 5;
    const STATUS_AUTH_DECLINED = 6;

    public static function parseOrderStatus($orderStatus)
    {
        switch ($orderStatus) {
            case self::STATUS_REGISTERED_BUT_NOT_PAID:
                return 'Order registered, but not paid off';
            case self::STATUS_PRE_AUTH_HELD:
                return 'Pre-authorization amount was held (for two-phase payment)';
            case self::STATUS_DEPOSITED_SUCCESSFULLY:
                return 'The amount was deposited successfully';
            case self::STATUS_AUTH_REVERSED:
                return 'Authorization reversed';
            case self::STATUS_REFUNDED:
                return 'Transaction was refunded';
            case self::STATUS_AUTH_ACS_INIATED:
                return "Authorization through the issuer's ACS initiated.";
            case self::STATUS_AUTH_DECLINED:
                return "Authorization declined";
            default:
                return 'Unknown';
        }
    }

}