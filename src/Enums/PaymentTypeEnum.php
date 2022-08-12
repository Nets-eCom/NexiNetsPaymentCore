<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentTypeEnum extends Enum
{
    const MerchantHostedEcom = 'MerchantHostedEcom';
    const NetsHostedEcom = 'NetsHostedEcom';
    const Moto = 'Moto';
}