<?php


namespace Stev\BTIPay\Util;


class OrderStatuses
{

    // comanda inregistrata dar nu s-au introdus inca datele de card.
    public const STATUS_REGISTERED_BUT_NOT_PAID = 0;

    // pentru implementari 2 phase, comanda este preautorizata dar nu a fost inca incasata.
    public const STATUS_PRE_AUTH_HELD = 1;

    // comanda aprobata si incasata.
    public const STATUS_DEPOSITED_SUCCESSFULLY = 2;

    // tranzactie reversata, pentru implementari 2 phase.
    public const STATUS_AUTH_REVERSED = 3;

    // tranzactie cu refund total.
    public const STATUS_REFUNDED = 4;

    // clientul este in timpul autentificarii 3DS .
    public const STATUS_AUTH_ACS_INIATED = 5;

    // tranzactie declinata, de ex fonduri insuficiente.
    public const STATUS_AUTH_DECLINED = 6;

    // tranzactie cu refund partial.
    public const STATUS_REFUNDED_PARTIALLY = 7;

}