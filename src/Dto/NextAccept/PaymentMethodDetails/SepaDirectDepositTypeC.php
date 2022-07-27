<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class SepaDirectDepositTypeC implements PaymentMethodDetailsInterface
{
    public string $iban;
    public string $customerEmail;
    public string $mandateUrl;
    public string $type;

    public function getDetails()
    {
        return (object) [
            'iban' => $this->iban,
            'customerEmail' => $this->customerEmail,
            'mandateUrl' => $this->mandateUrl,
            'type' => $this->type,
        ];
    }
}