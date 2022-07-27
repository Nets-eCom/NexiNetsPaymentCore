<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentProcessingType extends Enum
{
    const None = 'None';
    const Verify = 'Verify';
    const Authorize = 'Authorize';
    const Sale = 'Sale';
}