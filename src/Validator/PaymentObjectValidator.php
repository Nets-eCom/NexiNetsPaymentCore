<?php

namespace NetsCore\Validator;

use NetsCore\Dto\NextAccept\Request\PaymentObject;
use NetsCore\Enums\CountryCodeEnum;
use NetsCore\Enums\CurrencyCodeEnum;

class PaymentObjectValidator
{
    public static function isPaymentObjectValid(PaymentObject $paymentObject): bool
    {
        if ( ! CurrencyCodeEnum::isValid($paymentObject->currencyCode)) {
            return false;
        }
        if ( ! CountryCodeEnum::isValid($paymentObject->customer->address->countryCode)) {
            return false;
        }

        return true;
    }
}
