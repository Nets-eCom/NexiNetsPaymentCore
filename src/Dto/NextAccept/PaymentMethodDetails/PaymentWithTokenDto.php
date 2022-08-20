<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class PaymentWithTokenDto implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public bool $isRecurring;
    public string $type;
}
