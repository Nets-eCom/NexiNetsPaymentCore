<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodActionEnum extends Enum
{
    const Allow = 'Allow';
    const Reject = 'Reject';
}