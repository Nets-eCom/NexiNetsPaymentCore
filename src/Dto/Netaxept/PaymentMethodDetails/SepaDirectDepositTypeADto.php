<?php

namespace NexiNetsCore\Dto\Netaxept\PaymentMethodDetails;

use NexiNetsCore\Interfaces\PaymentMethodDetailsInterface;

class SepaDirectDepositTypeADto implements PaymentMethodDetailsInterface
{
    public string $iban;
    public string $customerEmail;
    public string $type;
}
