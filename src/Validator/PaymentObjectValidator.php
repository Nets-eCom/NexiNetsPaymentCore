<?php

namespace NetsCore\Validator;

use NetsCore\Dto\NextAccept\Request\PaymentObject;
use NetsCore\Enums\CurrencyCodeEnum;
use NetsCore\Enums\LanguageEnum;
use NetsCore\Enums\PageTypeEnum;
use NetsCore\Enums\PaymentProcessingTypeEnum;
use NetsCore\Enums\PaymentTypeEnum;
use NetsCore\Exceptions\PaymentObjectException;

class PaymentObjectValidator
{
    public static function isPaymentObjectValid(PaymentObject $paymentObject): bool
    {
        if (empty($paymentObject->redirectUrls)) {
            throw new PaymentObjectException("redirectUrls must be RedirectUrls object");
        }
        if ( ! PaymentTypeEnum::isValid($paymentObject->type)) {
            throw new PaymentObjectException("Invalid payment type");
        }

        if (empty($paymentObject->amount)) {
            throw new PaymentObjectException("Amount variable cannot be empty");
        }

        if ( ! PaymentProcessingTypeEnum::isValid($paymentObject->processing)) {
            throw new PaymentObjectException("Invalid processing type");
        }

        if ( ! CurrencyCodeEnum::isValid($paymentObject->currencyCode)) {
            throw new PaymentObjectException("Invalid currency code");
        }

        if ( ! empty($paymentObject->payPageConfiguration)) {
            if (LanguageEnum::isValid($paymentObject->payPageConfiguration->language)) {
                throw new PaymentObjectException("PayPageConfiguration->language is invalid");
            } elseif (PageTypeEnum::isValid($paymentObject->payPageConfiguration->pageType)) {
                throw new PaymentObjectException("PayPageConfiguration->pageType is invalid");
            }
        } else {
            throw new PaymentObjectException("PayPageConfiguration cannot be empty");
        }

        return true;
    }
}
