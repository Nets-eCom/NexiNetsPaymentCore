<?php

namespace NetsCore\Dto\Netaxept\Request;

use NetsCore\Dto\Netaxept\BasketItemDto;
use NetsCore\Dto\Netaxept\PayPageConfigurationDto;
use NetsCore\Dto\Netaxept\RedirectUrlDto;
use NetsCore\Interfaces\CustomerInterface;
use NetsCore\Interfaces\PaymentMethodDetailsInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class PaymentObject implements PaymentObjectInterface
{
    public string $type;
    public string $paymentNumber;
    public string $checkoutText;
    public string $reconciliationReference;
    public int $amount;
    public string $currencyCode;
    public string $processing;
    public string $description;

    public RedirectUrlDto $redirectUrls;
    public PaymentMethodDetailsInterface $paymentMethodDetails;
    public CustomerInterface $customer;
    public PayPageConfigurationDto $payPageConfiguration;

    /**
     * @var BasketItemDto[]
     */
    public array $basket;

    public function getPaymentId()
    {
        // TODO: Implement getPaymentId() method.
    }
}
