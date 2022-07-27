<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class SepaDirectDepositTypeC implements PaymentMethodDetailsInterface
{
    public string $iban;
    public string $customerEmail;
    public string $mandateUrl;
    public string $type;
}