<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodEnum extends Enum
{
    const AmericanExpress = 'AmericanExpress';
    const DinersClubInternational = 'DinersClubInternational';
    const JCB = 'JCB';
    const Maestro = 'Maestro';
    const MasterCard = 'MasterCard';
    const Visa = 'Visa';
    const PproSepaDirectDebit = 'PproSepaDirectDebit';
    const Sofortbanking = 'Sofortbanking';
    const PayPal = 'PayPal';
}