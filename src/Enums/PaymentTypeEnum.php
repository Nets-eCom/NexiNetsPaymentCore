<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentTypeEnum extends Enum
{
    const MERCHANT_HOSTED_ECOM = 'MerchantHostedEcom';
    const NETS_HOSTED_ECOM = 'NetsHostedEcom';
    const MOTO = 'Moto';
}
