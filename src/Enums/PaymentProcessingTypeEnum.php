<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentProcessingTypeEnum extends Enum
{
    const None = 'None';
    const Verify = 'Verify';
    const Authorize = 'Authorize';
    const Sale = 'Sale';
}