<?php

namespace NetsCore\Interfaces;

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
