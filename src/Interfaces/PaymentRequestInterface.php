<?php

namespace NetsCore\Interfaces;

interface PaymentRequestInterface
{
    public function getPaymentId(): string;
    public function getBodyRequest(): array;
}
