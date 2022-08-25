<?php

namespace NetsCore\Dto\NextAccept;

class CreatePaymentResponseDto
{
    public string $paymentId;

    public string $paypageURL;

    public function map($data): self
    {
        $data = json_decode($data);
        $this->paymentId = $data->paymentId;
        $this->paypageURL = $data->paypageURL;
        return $this;
    }
}
