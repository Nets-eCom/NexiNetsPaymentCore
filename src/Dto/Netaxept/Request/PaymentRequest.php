<?php

namespace NetsCore\Dto\Netaxept\Request;

use NetsCore\Interfaces\PaymentRequestInterface;

class PaymentRequest implements PaymentRequestInterface
{
    public string $paymentId;
    public int $amount;
    public string $description;

    /**
     * @return array
     */
    public function getBodyRequest(): array
    {
        return array('amount' => $this->amount, 'description' => $this->description);
    }

    /**
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }
}