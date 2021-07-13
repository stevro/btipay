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

}