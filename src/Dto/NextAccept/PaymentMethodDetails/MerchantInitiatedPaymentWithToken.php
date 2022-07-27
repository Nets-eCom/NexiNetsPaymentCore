<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class MerchantInitiatedPaymentWithToken implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public string $merchantInitiatedTransactionType;
    public string $type;

}