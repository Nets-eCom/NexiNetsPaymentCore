<?php

namespace NetsCore\Validator;

use NetsCore\Enums\CountryCodeEnum;
use NetsCore\Enums\CurrencyCodeEnum;

class PaymentObjectValidator
{
    public static function isCurrencyCodeValid(string $currencyCode): bool
    {
        if (CurrencyCodeEnum::isValid($currencyCode)) {
            return true;
        }

        return false;
    }

    public static function isCountryCodeValid(string $countryCode): bool
    {
        if (CountryCodeEnum::isValid($countryCode)) {
            return true;
        }

        return false;
    }
}
