<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class Sofort implements PaymentMethodDetailsInterface
{
    public string $type;
}