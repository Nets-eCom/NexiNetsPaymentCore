<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class SepaDirectDepositTypeADto implements PaymentMethodDetailsInterface
{
    public string $iban;
    public string $customerEmail;
    public string $type;

}