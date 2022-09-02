<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodCardTypeEnum extends Enum
{
    public const ALL = 'All';
    public const DEBIT = 'Debit';
    public const CREDIT = 'Credit';
}
