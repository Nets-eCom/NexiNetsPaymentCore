<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class MerchantInitiatedPaymentWithToken implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public string $merchantInitiatedTransactionType;
    public string $type;

    public function getDetails(): object
    {
        return (object) [
            'token' => $this->token,
            'secret' => $this->secret,
            'merchantInitiatedTransactionType' => $this->merchantInitiatedTransactionType,
            'type' => $this->type,
        ];
    }
}