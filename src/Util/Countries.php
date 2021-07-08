<?php


namespace Stev\BTIPay\Util;


use Alcohol\ISO3166\ISO3166;

class Countries
{

    /**
     * @param $countryName - Alpha2 country name - RO/FR/IT
     * @return string
     */
    public static function getCountryCodeByAlpha2($countryName)
    {
        $iso = new ISO3166();

        return (string)$iso->getByAlpha2($countryName)['numeric'];
    }

}