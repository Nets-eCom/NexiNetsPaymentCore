<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentType extends Enum
{
    const MerchantHostedEcom = 'MerchantHostedEcom';
    const NetsHostedEcom = 'NetsHostedEcom';
    const Moto = 'Moto';
}