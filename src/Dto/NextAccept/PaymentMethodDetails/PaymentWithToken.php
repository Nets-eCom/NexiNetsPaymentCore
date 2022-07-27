<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

class PaymentWithToken
{
    public string $token;
    public string $secret;
    public bool $isRecurring;
    public string $type;
}