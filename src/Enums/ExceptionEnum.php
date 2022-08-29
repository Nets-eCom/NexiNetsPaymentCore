<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class ExceptionEnum extends Enum
{
    const REDIRECTURL_CANNOT_BE_EMPTY = 'RedirectUrl has to be fill';
    const PAYMENT_TYPE_IS_INVALID = 'Payment type that was used to process a payment is not valid';
    const PAYMENT_AMOUNT_CANNOT_BE_EMPTY = 'Amount has to be indicated';
    const WRONG_PAYMENT_PROCESING_TYPE = 'Invalid Processing Type';
    const CURRENCY_ERROR = 'Wrong currency code';
    const PAYPAGE_CONFIGURATION_LANGUAGE_ERROR = 'Language is invalid';
    const PAYPAGE_CONFIGURATION_PAGETYPE_ERROR = 'PageType is invalid';
    const PAYPAGE_CONFIGURATION_ERROR = 'Pay Page cannot be empty';
    const CAPTURE_PAYMENT_CRITICAL_ERROR = 'Capture Payment Validation Fail';
    const CAPTURE_PAYMENT_BAD_REQUEST = 'Capture Payment Bad Request';
    const CAPTURE_PAYMENT_CLIENT_ERROR = 'Capture Payment Client Error';
}
