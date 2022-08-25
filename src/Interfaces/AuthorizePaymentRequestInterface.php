<?php

namespace NetsCore\Interfaces;

interface AuthorizePaymentRequestInterface
{
    public function getPaymentId(): string;
    public function getBodyRequest(): array;
}
