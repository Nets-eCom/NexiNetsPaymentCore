<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodTypeEnum extends Enum
{
    const Card = 'Card';
    const DirectBankTransfer = 'DirectBankTransfer';
    const Prepaid = 'Prepaid';
}