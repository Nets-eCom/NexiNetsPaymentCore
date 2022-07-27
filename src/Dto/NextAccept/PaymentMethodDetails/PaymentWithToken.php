<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class PaymentWithToken implements PaymentMethodDetailsInterface
{
    public string $token;
    public string $secret;
    public bool $isRecurring;
    public string $type;

    public function getDetails(): object
    {
        return (object) [
          'token' => $this->token,
          'secret' => $this->secret,
          'isRecurring' => $this->isRecurring,
          'type' => $this->type,
        ];
    }
}