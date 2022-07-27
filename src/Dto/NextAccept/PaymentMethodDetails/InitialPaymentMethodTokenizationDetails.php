<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class InitialPaymentMethodTokenizationDetails implements PaymentMethodDetailsInterface
{
    public string $expiryDate;
    public int $intervalDays;
    public string $type;

    public function getDetails()
    {
        // TODO: Implement getDetails() method.
    }
}