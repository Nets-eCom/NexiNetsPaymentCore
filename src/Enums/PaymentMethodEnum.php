<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class PaymentMethodEnum extends Enum
{
    const AMERICAN_EXPRESS = 'AmericanExpress';
    const DINERS_CLUB_INTERNATIONAL = 'DinersClubInternational';
    const JCB = 'JCB';
    const MAESTRO = 'Maestro';
    const MASTER_CARD = 'MasterCard';
    const VISA = 'Visa';
    const PPRO_SEPA_DIRECT_DEBIT = 'PproSepaDirectDebit';
    const SOFORTBANKING = 'Sofortbanking';
    const PAY_PAL = 'PayPal';
}
