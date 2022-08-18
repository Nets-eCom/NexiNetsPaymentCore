<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class MerchantInitiatedTransactionTypeEnum extends Enum
{
    const UNSCHEDULED_CARD_ON_FILE = 'UnscheduledCardOnFile';
    const DELAYED_CHARGE = 'DelayedCharge';
    const NO_SHOW = 'NoShow';
}
