<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class SofortDto implements PaymentMethodDetailsInterface
{
    public string $type;
}
