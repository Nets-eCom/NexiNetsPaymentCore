<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

class MerchantInitiatedPaymentWithToken
{
    public string $token;
    public string $secret;
    public string $merchantInitiatedTransactionType;
    public string $type;
}