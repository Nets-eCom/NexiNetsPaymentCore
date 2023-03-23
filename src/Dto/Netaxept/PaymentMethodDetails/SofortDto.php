<?php

namespace NexiNetsCore\Dto\Netaxept\PaymentMethodDetails;

use NexiNetsCore\Interfaces\PaymentMethodDetailsInterface;

class SofortDto implements PaymentMethodDetailsInterface
{
    public string $type;
}
