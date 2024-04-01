<?php


namespace Stev\BTIPay\Util;


use League\ISO3166\ISO3166;

class Countries
{

    /**
     * @param $countryName - Alpha2 country name - RO/FR/IT
     * @return string
     */
    public static function getCountryCodeByAlpha2($countryName): string
    {
        $iso = new ISO3166();

        return (string)$iso->alpha2($countryName)['numeric'];
    }

}