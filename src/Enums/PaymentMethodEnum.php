<?php

namespace NetsCore\Enums;

enum PaymentMethodEnum
{
    public const AMERICAN_EXPRESS = 'AmericanExpress';
    public const DINERS_CLUB_INTERNATIONAL = 'DinersClubInternational';
    public const JCB = 'JCB';
    public const MAESTRO = 'Maestro';
    public const MASTER_CARD = 'MasterCard';
    public const VISA = 'Visa';
    public const PPRO_SEPA_DIRECT_DEBIT = 'PproSepaDirectDebit';
    public const SOFORTBANKING = 'Sofortbanking';
    public const PAY_PAL = 'PayPal';
}
