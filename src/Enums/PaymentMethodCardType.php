<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodCardType extends Enum
{
    const All = 'All';
    const Debit = 'Debit';
    const Credit = 'Credit';
}