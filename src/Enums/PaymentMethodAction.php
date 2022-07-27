<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodAction extends Enum
{
    const Allow = 'Allow';
    const Reject = 'Reject';
}