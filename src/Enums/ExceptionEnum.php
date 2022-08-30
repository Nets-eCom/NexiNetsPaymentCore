<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class ExceptionEnum extends Enum
{
    public const REDIRECTURL_CANNOT_BE_EMPTY = 'RedirectUrl has to be fill';
    public const PAYMENT_TYPE_IS_INVALID = 'Payment type that was used to process a payment is not valid';
    public const PAYMENT_AMOUNT_CANNOT_BE_EMPTY = 'Amount has to be indicated';
    public const WRONG_PAYMENT_PROCESING_TYPE = 'Invalid Processing Type';
    public const CURRENCY_ERROR = 'Wrong currency code';
    public const PAYPAGE_CONFIGURATION_LANGUAGE_ERROR = 'Language is invalid';
    public const PAYPAGE_CONFIGURATION_PAGETYPE_ERROR = 'PageType is invalid';
    public const PAYPAGE_CONFIGURATION_ERROR = 'Pay Page cannot be empty';
    public const CAPTURE_PAYMENT_CRITICAL_ERROR = 'Capture Payment Validation Fail';
    public const CAPTURE_PAYMENT_BAD_REQUEST = 'Capture Payment Bad Request';
    public const CAPTURE_PAYMENT_CLIENT_ERROR = 'Capture Payment Client Error';
}
