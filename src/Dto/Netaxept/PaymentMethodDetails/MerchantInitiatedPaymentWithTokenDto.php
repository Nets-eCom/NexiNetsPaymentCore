<?php

namespace NetsCore\Dto\Netaxept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class MerchantInitiatedPaymentWithTokenDto implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public string $merchantInitiatedTransactionType;
    public string $type;
}
