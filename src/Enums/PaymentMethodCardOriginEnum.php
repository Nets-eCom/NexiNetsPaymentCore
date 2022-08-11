<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodCardOriginEnum extends Enum
{
    const International = 'International';
    const Domestic = 'Domestic';
    const EU = 'EU';
    const NonEU = 'NonEU';
}