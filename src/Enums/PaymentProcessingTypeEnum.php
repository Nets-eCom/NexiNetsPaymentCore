<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentProcessingTypeEnum extends Enum
{
    public const NONE = 'None';
    public const VERIFY = 'Verify';
    public const AUTHORIZE = 'Authorize';
    public const SALE = 'Sale';
}
