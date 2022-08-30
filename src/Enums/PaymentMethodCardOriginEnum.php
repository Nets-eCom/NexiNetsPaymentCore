<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodCardOriginEnum extends Enum
{
    public const INTERNATIONAL = 'International';
    public const DOMESTIC = 'Domestic';
    public const EU = 'EU';
    public const NON_EU = 'NonEU';
}
