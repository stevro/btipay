<?php

namespace Stev\BTIPay\Util;

class ActionCodes
{

    public const ACTION_CODE_SUCCESS = 0;

    // = Card restricționat (blocat temporar sau permanent din cauza lipsei plății sau a morții titularului de card).
    public const ACTION_CODE_CARD_RESTRICTED = 104;

    // Tranzacția nu poate fi autorizată din cauza acordului guvernului, băncii
    //centrale sau instituției financiare, legi sau reglementări
    public const ACTION_CODE_CARD_REGULATION_ERROR = 124;

    // Card inactiv. Vă rugăm activați cardul.
    public const ACTION_CODE_INACTIVE = 320;

    // Emitent indisponibil.
    public const ACTION_CODE_ISSUER_UNAVAILABLE = 801;

    // Card blocat. Contactați banca emitentă sau reîncercați tranzacția cu alt card.
    public const ACTION_CODE_BLOCKED_CARD = 803;

    // Tranzacția nu este permisă. Contactați banca emitentă sau reîncercați tranzacția cu alt card.
    public const ACTION_CODE_TRANSACTION_NOT_ALLOWED = 804;

    // Tranzacție respinsă.
    public const ACTION_CODE_TRANSACTION_REJECTED = 805;

    // Dată expirare card greșită.
    public const ACTION_CODE_INVALID_CARD_EXPIRY_DATE = 861;

    // CVV gresit.
    public const ACTION_CODE_INVALID_CARD_CVV = 871;

    // Card invalid. Acesta nu există în baza de date.
    public const ACTION_CODE_INVALID_CARD = 905;

    // Card expirat.
    public const ACTION_CODE_EXPIRED_CARD = 906;

    // Tranzacție invalidă. Contactați banca emitentă sau reîncercați tranzacția cu alt card.
    public const ACTION_CODE_INVALID_TRANSACTION = 913;

    // Cont invalid. Vă rugăm contactați banca emitentă.
    public const ACTION_CODE_INVALID_ACCOUNT = 914;

    // Fonduri insuficiente.
    public const ACTION_CODE_INSUFFICIENT_FUNDS = 915;

    // Limită tranzacționare depășită.
    public const ACTION_CODE_TRANSACTION_LIMIT_EXCEDED = 917;

    // Suspect de fraudă.
    public const ACTION_CODE_FRAUD_SUSPICION = 952;

    // Tranzacția în rate nu este permisă cu acest card. Te rugăm să folosești un card de credit emise de Banca Transilvania.
    public const ACTION_CODE_INSTALLMENTS_NOT_ALLOWED = 998;

    // 3DS2 authentication is declined by Authentication Response (ARes) – issuer
    public const ACTION_CODE_3DS_AUTH_DECLINED = 341016;

    // 3DS2 authentication status in ARes is unknown - issuer
    public const ACTION_CODE_3DS_AUTH_STATUS_UNKNOWN = 341017;

    // 3DS2 CReq cancelled - client
    public const ACTION_CODE_3DS_CREQ_CANCELLED = 341018;

    // 3DS2 CReq failed - client/issuer
    public const ACTION_CODE_3DS_CREQ_FAILED = 341019;

    // 3DS2 unknown status in RReq - issuer
    public const ACTION_CODE_3DS_RREQ_UNKNOWN_STATUS = 341020;

    //  No payment attempts yet
    public const ACTION_CODE_NO_PAYMENT_ATTEMPTS = -100;
}