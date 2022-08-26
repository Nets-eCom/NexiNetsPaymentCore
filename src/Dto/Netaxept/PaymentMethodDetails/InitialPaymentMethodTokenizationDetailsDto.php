<?php

namespace NetsCore\Dto\Netaxept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class InitialPaymentMethodTokenizationDetailsDto implements PaymentMethodDetailsInterface
{
    public string $expiryDate;
    public int $intervalDays;
    public string $type;
}
