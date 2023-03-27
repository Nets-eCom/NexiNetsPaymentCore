<?php

namespace NexiNetsCore\Dto\Netaxept\PaymentMethodDetails;

use NexiNetsCore\Interfaces\PaymentMethodDetailsInterface;

class MerchantInitiatedPaymentWithTokenDto implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public string $merchantInitiatedTransactionType;
    public string $type;
}
