<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodTypeEnum extends Enum
{
    public const CARD = 'Card';
    public const DIRECT_BANK_TRANSFER = 'DirectBankTransfer';
    public const PREPAID = 'Prepaid';
}
