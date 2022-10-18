<?php

namespace NetsCore\Dto\Netaxept\Response;

class CreatePaymentResponseDto
{
    public string $paymentId;

    public string $payPageUrl;

    public function map($data): self
    {
        $data             = json_decode($data);
        $this->paymentId  = $data->paymentId;
        $this->payPageUrl = $data->payPageUrl;

        return $this;
    }
}
