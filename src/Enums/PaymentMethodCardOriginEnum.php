<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodCardOriginEnum extends Enum
{
    const INTERNATIONAL = 'International';
    const DOMESTIC = 'Domestic';
    const EU = 'EU';
    const NON_EU = 'NonEU';
}
