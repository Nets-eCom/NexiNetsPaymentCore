<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodDetailsTypeEnum extends Enum
{
    const PaymentWithToken = 'PaymentWithToken';
    const InitialPaymentMethodTokenizationDetails = 'InitialPaymentMethodTokenizationDetails';
    const MerchantInitiatedPaymentWithToken = 'MerchantInitiatedPaymentWithToken';
    const SepaDirectDepositTypeA = 'SepaDirectDepositTypeA';
    const SepaDirectDepositTypeC = 'SepaDirectDepositTypeC';
    const Sofort = 'Sofort';
}