<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentProcessingTypeEnum extends Enum
{
    const NONE = 'None';
    const VERIFY = 'Verify';
    const AUTHORIZE = 'Authorize';
    const SALE = 'Sale';
}
