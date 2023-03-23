<?php

namespace NexiNetsCore\Dto\Netaxept\PaymentMethodDetails;

use NexiNetsCore\Interfaces\PaymentMethodDetailsInterface;

class InitialPaymentMethodTokenizationDetailsDto implements PaymentMethodDetailsInterface
{
    public string $expiryDate;
    public int $intervalDays;
    public string $type;
}
