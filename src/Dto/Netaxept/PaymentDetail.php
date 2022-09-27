<?php

namespace NetsCore\Dto\Netaxept;

class PaymentDetail
{
    public ?string $paymentMethodType;
    public ?string $paymentMethod;
    public ?string $paymentMethodDescription;
    public ?CardDetails $cardDetails;

    public function map($stdClass): PaymentDetail
    {
        if(empty($stdClass)) {
            return $this;
        }

        $this->paymentMethodType = $stdClass->paymentMethodType ?: null;
        $this->paymentMethod = $stdClass->paymentMethod ?: null;
        $this->paymentMethodDescription = $stdClass->paymentMethodDescription ?: null;
        $this->cardDetails = $stdClass->cardDetails ? (new CardDetails())->map($stdClass->cardDetails) : null;
        return $this;
    }
}
