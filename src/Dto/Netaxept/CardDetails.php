<?php

namespace NetsCore\Dto\Netaxept;

class CardDetails
{
    public ?string $maskedPan;
    public ?string $token;
    public ?string $expiryYear;
    public ?string $expiryMonth;

    public function map($stdClass): CardDetails
    {
        if(empty($stdClass)) {
            return $this;
        }

        $this->maskedPan = $stdClass->maskedPan ?: null;
        $this->token = $stdClass->token ?: null;
        $this->expiryYear = $stdClass->expiryYear ?: null;
        $this->expiryMonth = $stdClass->expiryMonth ?: null;
        return $this;
    }
}
