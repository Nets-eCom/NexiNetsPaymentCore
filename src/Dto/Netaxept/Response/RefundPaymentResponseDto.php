<?php

namespace NetsCore\Dto\Netaxept\Response;

class RefundPaymentResponseDto
{
    public string $paymentId;

    public function map($data): self
    {
        $data = json_decode($data);
        $this->paymentId = $data->paymentId;
        return $this;
    }
}
