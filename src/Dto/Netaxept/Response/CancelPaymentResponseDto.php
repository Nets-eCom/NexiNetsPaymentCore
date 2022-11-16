<?php

namespace NetsCore\Dto\Netaxept\Response;

class CancelPaymentResponseDto
{
    public string $paymentId;
    public string $transactionRef;

    /**
     * @param $data
     *
     * @return CancelPaymentResponseDto
     */
    public function map($data): self
    {
        $data = json_decode($data);
        $this->paymentId = $data->paymentId;
        $this->transactionRef = $data->transactionRef;
        return $this;
    }
}
