<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentTypeEnum extends Enum
{
    public const MERCHANT_HOSTED_ECOM = 'MerchantHostedEcom';
    public const NETS_HOSTED_ECOM = 'NetsHostedEcom';
    public const MOTO = 'Moto';
}
