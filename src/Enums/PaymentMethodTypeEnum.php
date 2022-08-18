<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodTypeEnum extends Enum
{
    const CARD = 'Card';
    const DIRECT_BANK_TRANSFER = 'DirectBankTransfer';
    const PREPAID = 'Prepaid';
}
