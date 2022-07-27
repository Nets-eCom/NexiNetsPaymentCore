<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class MerchantInitiatedTransactionType extends Enum
{
    const UnscheduledCardOnFile = 'UnscheduledCardOnFile';
    const DelayedCharge = 'DelayedCharge';
    const NoShow = 'NoShow';
}