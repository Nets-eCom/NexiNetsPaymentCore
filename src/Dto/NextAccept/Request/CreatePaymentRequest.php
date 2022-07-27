<?php

namespace NetsCore\Dto\NextAccept\Request;

use NetsCore\Dto\NextAccept\BasketItem;
use NetsCore\Dto\NextAccept\PayPageConfiguration;
use NetsCore\Interfaces\CustomerInterface;
use NetsCore\Interfaces\PaymentMethodDetailsInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class CreatePaymentRequest implements PaymentObjectInterface
{
    public string $type;
    public string $orderNumber;
    public string $orderDescription;
    public string $reconciliationReference;
    public int $amount;
    public string $currencyCode;
    public string $processing;
    public string $description;

    public PaymentMethodDetailsInterface $paymentMethodDetails;
    public CustomerInterface $customer;
    public PayPageConfiguration $payPageConfiguration;

    /**
     * @var BasketItem[]
     */
    public array $basket;
}