<?php

namespace NexiNetsCore\Dto\Netaxept\Request;

use NexiNetsCore\Dto\Netaxept\BasketItemDto;
use NexiNetsCore\Interfaces\PaymentRequestInterface;

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

    /**
     * @return array
     */
    public function getBodyRequest(): array
    {
        return array('amount' => $this->amount, 'description' => $this->description, 'basket'=> $this->basket);
    }

}
