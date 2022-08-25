<?php

namespace NetsCore\Dto\NextAccept;

class AuthorizePaymentResponseDto
{
    public string $paymentId;

    public string $authorizationId;

    public function map($data): self
    {
        $data = json_decode($data);
        $this->paymentId = $data->paymentId;
        $this->authorizationId = $data->authorizationId;
        return $this;
    }
}
