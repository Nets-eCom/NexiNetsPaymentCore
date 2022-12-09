<?php

namespace NetsCore\Enums;

enum MerchantInitiatedTransactionTypeEnum
{
    public const UNSCHEDULED_CARD_ON_FILE = 'UnscheduledCardOnFile';
    public const DELAYED_CHARGE = 'DelayedCharge';
    public const NO_SHOW = 'NoShow';
}
