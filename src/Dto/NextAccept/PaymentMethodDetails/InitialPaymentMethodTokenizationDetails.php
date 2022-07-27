<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

class InitialPaymentMethodTokenizationDetails
{
    public string $expiryDate;
    public int $intervalDays;
    public string $type;
}