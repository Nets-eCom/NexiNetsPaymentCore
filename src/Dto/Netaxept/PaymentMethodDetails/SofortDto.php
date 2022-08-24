<?php

namespace NetsCore\Dto\Netaxept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class SofortDto implements PaymentMethodDetailsInterface
{
    public string $type;
}
