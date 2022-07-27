<?php

namespace NetsCore\Dto\NextAccept;

class PaymentMethodActionInfo
{
    public string $paymentMethod;
    public string $name;
    public int $fee;
    public string $cardType;
    public string $cardOrigin;
    public string $cardProductType;
    public int $bin;
    public string $action;
}