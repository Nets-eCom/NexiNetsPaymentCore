<?php

namespace NetsCore\Dto\Netaxept;

class PaymentSummary
{
    public ?int $paymentAmount;
    public ?int $authorizedAmount;
    public ?int $capturedAmount;
    public ?int $refundedAmount;
    public ?int $fee;

    /**
     * @param $sdtClass
     *
     * @return PaymentSummary
     */
    public function map($sdtClass): PaymentSummary
    {
        $body = $sdtClass;
        $this->paymentAmount = $body->paymentAmount;
        $this->authorizedAmount = $body->authorizedAmount;
        $this->capturedAmount = $body->capturedAmount;
        $this->refundedAmount = $body->refundedAmount;
        $this->fee = $body->fee;

        return $this;
    }
}
