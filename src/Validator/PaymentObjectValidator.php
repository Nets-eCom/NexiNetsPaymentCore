<?php

namespace NetsCore\Validator;

use NetsCore\Dto\Netaxept\Request\PaymentObject;
use NetsCore\Enums\CurrencyCodeEnum;
use NetsCore\Enums\ExceptionEnum;
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
            throw new PaymentObjectException(ExceptionEnum::REDIRECTURLS_CANNOT_BE_EMPTY);
        }
        if ( ! PaymentTypeEnum::isValid($paymentObject->type)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_TYPE_IS_INVALID);
        }

        if (empty($paymentObject->amount)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_AMOUNT_CANNOT_BE_EMPTY);
        }

        if ( ! PaymentProcessingTypeEnum::isValid($paymentObject->processing)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_PROCESSING_TYPE_ERROR);
        }

        if ( ! CurrencyCodeEnum::isValid($paymentObject->currencyCode)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_CURRENCY_CODE_ERROR);
        }

        if ( ! empty($paymentObject->payPageConfiguration)) {
            if (LanguageEnum::isValid($paymentObject->payPageConfiguration->language)) {
                throw new PaymentObjectException(ExceptionEnum::PAYPAGE_CONFIGURATION_LANGUAGE_ERROR);
            } elseif (PageTypeEnum::isValid($paymentObject->payPageConfiguration->pageType)) {
                throw new PaymentObjectException(ExceptionEnum::PAYPAGE_CONFIGURATION_PAGETYPE_ERROR);
            }
        } else {
            throw new PaymentObjectException(ExceptionEnum::PAYPAGE_CONFIGURATION_ERROR);
        }

        return true;
    }
}
