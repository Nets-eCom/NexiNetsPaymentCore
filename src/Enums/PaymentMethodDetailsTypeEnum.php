<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodDetailsTypeEnum extends Enum
{
    public const PAYMENT_WITH_TOKEN = 'PaymentWithToken';
    public const INITIAL_PAYMENT_METHOD_TOKENIZATION_DETAILS = 'InitialPaymentMethodTokenizationDetails';
    public const MERCHANT_INITIATED_PAYMENT_WITH_TOKEN = 'MerchantInitiatedPaymentWithToken';
    public const SEPA_DIRECT_DEPOSIT_TYPE_A = 'SepaDirectDepositTypeA';
    public const SEPA_DIRECT_DEPOSIT_TYPE_C = 'SepaDirectDepositTypeC';
    public const SOFORT = 'Sofort';
}
