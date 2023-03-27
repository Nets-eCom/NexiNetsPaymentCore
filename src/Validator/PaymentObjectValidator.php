<?php

namespace NexiNetsCore\Validator;

use NexiNetsCore\Dto\Netaxept\Request\PaymentObject;
use NexiNetsCore\Enums\CurrencyCodeEnum;
use NexiNetsCore\Enums\ExceptionEnum;
use NexiNetsCore\Enums\LanguageEnum;
use NexiNetsCore\Enums\PageTypeEnum;
use NexiNetsCore\Enums\PaymentProcessingTypeEnum;
use NexiNetsCore\Enums\PaymentTypeEnum;
use NexiNetsCore\Exceptions\PaymentObjectException;

class PaymentObjectValidator
{
    /**
     * @param PaymentObject $paymentObject
     *
     * @return bool
     * @throws PaymentObjectException
     */
    public static function isPaymentObjectValid(PaymentObject $paymentObject): bool
    {
        if (empty($paymentObject->redirectUrls)) {
            throw new PaymentObjectException(ExceptionEnum::REDIRECTURLS_CANNOT_BE_EMPTY);
        }
        if (! PaymentTypeEnum::isValid($paymentObject->type)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_TYPE_IS_INVALID);
        }

        if (empty($paymentObject->amount)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_AMOUNT_CANNOT_BE_EMPTY);
        }

        if (! PaymentProcessingTypeEnum::isValid($paymentObject->processing)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_PROCESSING_TYPE_ERROR);
        }

        if (! CurrencyCodeEnum::isValid($paymentObject->currencyCode)) {
            throw new PaymentObjectException(ExceptionEnum::PAYMENT_CURRENCY_CODE_ERROR);
        }

        if (! empty($paymentObject->payPageConfiguration)) {
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
