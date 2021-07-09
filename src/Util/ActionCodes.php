<?php

namespace Stev\BTIPay\Util;

class ActionCodes
{

    const ACTION_CODE_SUCCESS = 0;
    const ACTION_CODE_INACTIVE = 320;
    const ACTION_CODE_ISSUER_UNAVAILABLE = 801;
    const ACTION_CODE_BLOCKED_CARD = 803;
    const ACTION_CODE_TRANSACTION_REJECTED = 805;
    const ACTION_CODE_INVALID_CARD_EXPIRY_DATE = 861;
    const ACTION_CODE_INVALID_CARD_CVV = 871;
    const ACTION_CODE_INVALID_CARD = 905;
    const ACTION_CODE_EXPIRED_CARD = 906;
    const ACTION_CODE_INVALID_ACCOUNT = 914;
    const ACTION_CODE_INSUFFICIENT_FUNDS = 915;
    const ACTION_CODE_TRANSACTION_LIMIT_EXCEDED = 917;
    const ACTION_CODE_INSTALLMENTS_NOT_ALLOWED = 998;
    const ACTION_CODE_3DS_AUTH_DECLINED = 341016;
    const ACTION_CODE_3DS_AUTH_STATUS_UNKNOWN = 341017;
    const ACTION_CODE_3DS_CREQ_CANCELLED = 341018;
    const ACTION_CODE_3DS_CREQ_FAILED = 341019;
    const ACTION_CODE_3DS_RREQ_UNKNOWN_STATUS = 341020;


    public function parseActionCode($actionCode)
    {
        switch ((int)$actionCode) {
            case self::ACTION_CODE_SUCCESS:
                return 'Success';
                break;
            case self::ACTION_CODE_INACTIVE:
                return 'Card inactiv. Vă rugăm activați cardul.';
                break;
            case self::ACTION_CODE_ISSUER_UNAVAILABLE:
                return 'Emitent indisponibil.';
                break;
            case self::ACTION_CODE_BLOCKED_CARD:
                return 'Card blocat. Vă rugăm contactați banca emitentă.';
                break;
            case self::ACTION_CODE_TRANSACTION_REJECTED:
                return 'Tranzacție respinsă.';
                break;
            case self::ACTION_CODE_INVALID_CARD_EXPIRY_DATE:
                return 'Dată expirare card greșită.';
                break;
            case self::ACTION_CODE_INVALID_CARD_CVV:
                return 'CVV gresit.';
                break;
            case self::ACTION_CODE_INVALID_CARD:
                return 'Card invalid. Acesta nu există în baza de date.';
                break;
            case self::ACTION_CODE_EXPIRED_CARD:
                return 'Card expirat.';
                break;
            case self::ACTION_CODE_INVALID_ACCOUNT:
                return 'Cont invalid. Vă rugăm contactați banca emitentă.';
                break;
            case self::ACTION_CODE_INSUFFICIENT_FUNDS:
                return 'Fonduri insuficiente.';
                break;
            case self::ACTION_CODE_TRANSACTION_LIMIT_EXCEDED:
                return 'Limită tranzacționare depășită.';
                break;
            case self::ACTION_CODE_INSTALLMENTS_NOT_ALLOWED:
                return 'Tranzacția în rate nu este permisă cu acest card. Te rugăm să folosești un card de credit emise de Banca Transilvania.';
                break;
            case self::ACTION_CODE_3DS_AUTH_DECLINED:
                return '3DS2 authentication is declined by Authentication Response (ARes) – issuer';
                break;
            case self::ACTION_CODE_3DS_AUTH_STATUS_UNKNOWN:
                return '3DS2 authentication status in ARes is unknown - issuer';
                break;
            case self::ACTION_CODE_3DS_CREQ_CANCELLED:
                return '3DS2 CReq cancelled - client';
                break;
            case self::ACTION_CODE_3DS_CREQ_FAILED:
                return '3DS2 CReq failed - client/issuer';
                break;
            case self::ACTION_CODE_3DS_RREQ_UNKNOWN_STATUS:
                return '3DS2 unknown status in RReq - issuer';
                break;
            default:
                return 'Unknown';
        }
    }

}