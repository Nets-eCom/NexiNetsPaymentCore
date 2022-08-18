<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodDetailsTypeEnum extends Enum
{
    const PAYMENT_WITH_TOKEN = 'PaymentWithToken';
    const INITIAL_PAYMENT_METHOD_TOKENIZATION_DETAILS = 'InitialPaymentMethodTokenizationDetails';
    const MERCHANT_INITIATED_PAYMENT_WITH_TOKEN = 'MerchantInitiatedPaymentWithToken';
    const SEPA_DIRECT_DEPOSIT_TYPE_A = 'SepaDirectDepositTypeA';
    const SEPA_DIRECT_DEPOSIT_TYPE_C = 'SepaDirectDepositTypeC';
    const SOFORT = 'Sofort';
}
