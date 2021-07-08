<?php

namespace Stev\BTIPay\Util;
class ActionCodes
{


    public function parseActionCode($actionCode)
    {
        switch ((int)$actionCode) {
            case 320:
                return 'Card inactiv. Vă rugăm activați cardul.';
                break;
            case 801:
                return 'Emitent indisponibil.';
                break;
            case 803:
                return 'Card blocat. Vă rugăm contactați banca emitentă.';
                break;
            case 805:
                return 'Tranzacție respinsă.';
                break;
            case 861:
                return 'Dată expirare card greșită.';
                break;
            case 871:
                return 'CVV gresit.';
                break;
            case 905:
                return 'Card invalid. Acesta nu există în baza de date.';
                break;
            case 906:
                return 'Card expirat.';
                break;
            case 914:
                return 'Cont invalid. Vă rugăm contactați banca emitentă.';
                break;
            case 915:
                return 'Fonduri insuficiente.';
                break;
            case 917:
                return 'Limită tranzacționare depășită.';
                break;
            case 998:
                return 'Tranzacția în rate nu este permisă cu acest card. Te rugăm să folosești un card de credit emise de Banca Transilvania.';
                break;
            case 341016:
                return '3DS2 authentication is declined by Authentication Response (ARes) – issuer';
                break;
            case 341017:
                return '3DS2 authentication status in ARes is unknown - issuer';
                break;
            case 341018:
                return '3DS2 CReq cancelled - client';
                break;
            case 341019:
                return '3DS2 CReq failed - client/issuer';
                break;
            case 341020:
                return '3DS2 unknown status in RReq - issuer';
                break;
            default:
                return 'Unknown';
        }
    }

}