<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodCardTypeEnum extends Enum
{
    const All = 'All';
    const Debit = 'Debit';
    const Credit = 'Credit';
}