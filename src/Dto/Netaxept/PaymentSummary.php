<?php

namespace NetsCore\Dto\Netaxept;

class PaymentSummary
{
    public ?int $orderAmount;
    public ?int $authorizedAmount;
    public ?int $capturedAmount;
    public ?int $refundedAmount;
    public ?int $fee;
    public ?string $authorizationId;

    public function map($sdtClass): PaymentSummary
    {
        $body = $sdtClass;
        $this->orderAmount = $body->orderAmount;
        $this->authorizedAmount = $body->authorizedAmount;
        $this->capturedAmount = $body->capturedAmount;
        $this->refundedAmount = $body->refundedAmount;
        $this->fee = $body->fee;
        $this->authorizationId = $body->authorizationId;

        return $this;
    }
}