<?php

namespace NetsCore\Dto\NextAccept\Response;

class CancelPaymentResponseDto
{
    public string $paymentId;

    public function map($data): self
    {
        $data = json_decode($data);
        $this->paymentId = $data->paymentId;
        return $this;
    }
}
