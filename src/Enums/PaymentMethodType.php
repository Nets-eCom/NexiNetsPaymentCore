<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodType extends Enum
{
    const Card = 'Card';
    const DirectBankTransfer = 'DirectBankTransfer';
    const Prepaid = 'Prepaid';
}