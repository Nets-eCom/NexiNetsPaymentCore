<?php

namespace NetsCore\Enums;

enum PaymentProcessingTypeEnum
{
    public const NONE = 'None';
    public const VERIFY = 'Verify';
    public const AUTHORIZE = 'Authorize';
    public const SALE = 'Sale';
}
