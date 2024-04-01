<?php

namespace Stev\BTIPay\Util;

use Alcohol\ISO4217;

class Currency
{

    /**
     * @param string $currency - Alpha3 currency - EUR/USD
     * @return string
     */
    public static function getCurrencyNumericCode(string $currency): string
    {
        $iso4217 = new ISO4217();

        return (string)$iso4217->getByAlpha3($currency)['numeric'];
    }

}