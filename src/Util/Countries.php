<?php


namespace Stev\BTIPay\Util;


use Alcohol\ISO3166\ISO3166;

class Countries
{

    public static function getCountryCodeByAlpha2($countryName)
    {
        $iso = new ISO3166();

        return (string)$iso->getByAlpha2($countryName)['numeric'];
    }

}