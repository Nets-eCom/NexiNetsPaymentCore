<?php

namespace NetsCore\Dto\Netaxept\Request;

use NetsCore\Dto\Netaxept\BasketItemDto;
use NetsCore\Interfaces\PaymentRequestInterface;

class RefundPaymentRequest implements PaymentRequestInterface
{
    public string $paymentId;
    public int $amount;
    public string $description;
    /**
     * @var BasketItemDto[]
     */
    public array $basket;

    /**
     * @return string
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    public function getBodyRequest(): array
    {
        return array('amount' => $this->amount, 'description' => $this->description, 'basket'=> $this->basket);
    }

}