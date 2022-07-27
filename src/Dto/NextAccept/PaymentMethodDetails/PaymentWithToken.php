<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class PaymentWithToken implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public bool $isRecurring;
    public string $type;

    public function getDetails()
    {
        // TODO: Implement getDetails() method.
    }
}