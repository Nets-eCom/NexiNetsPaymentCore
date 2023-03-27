<?php

namespace NexiNetsCore\Dto\Netaxept\PaymentMethodDetails;

use NexiNetsCore\Interfaces\PaymentMethodDetailsInterface;

class PaymentWithTokenDto implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public bool $isRecurring;
    public string $type;
}
