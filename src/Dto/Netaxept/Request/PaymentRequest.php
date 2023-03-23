<?php

namespace NexiNetsCore\Dto\Netaxept\Request;

use NexiNetsCore\Interfaces\PaymentRequestInterface;

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
