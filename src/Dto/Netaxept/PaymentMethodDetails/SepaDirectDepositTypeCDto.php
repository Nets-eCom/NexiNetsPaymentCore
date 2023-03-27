<?php

namespace NexiNetsCore\Dto\Netaxept\PaymentMethodDetails;

use NexiNetsCore\Interfaces\PaymentMethodDetailsInterface;

class SepaDirectDepositTypeCDto implements PaymentMethodDetailsInterface
{
    public string $iban;
    public string $customerEmail;
    public string $mandateUrl;
    public string $type;
}
