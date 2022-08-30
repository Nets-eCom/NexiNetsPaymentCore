<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class MerchantInitiatedTransactionTypeEnum extends Enum
{
    public const UNSCHEDULED_CARD_ON_FILE = 'UnscheduledCardOnFile';
    public const DELAYED_CHARGE = 'DelayedCharge';
    public const NO_SHOW = 'NoShow';
}
