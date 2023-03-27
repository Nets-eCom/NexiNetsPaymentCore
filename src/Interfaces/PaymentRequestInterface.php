<?php

namespace NexiNetsCore\Interfaces;

interface PaymentRequestInterface
{
    /**
     * @return string
     */
    public function getPaymentId(): string;

    /**
     * @return array
     */
    public function getBodyRequest(): array;
}
