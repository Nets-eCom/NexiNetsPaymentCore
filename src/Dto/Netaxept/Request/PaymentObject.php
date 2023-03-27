<?php

namespace NexiNetsCore\Dto\Netaxept\Request;

use NexiNetsCore\Dto\Netaxept\BasketItemDto;
use NexiNetsCore\Dto\Netaxept\PayPageConfigurationDto;
use NexiNetsCore\Dto\Netaxept\RedirectUrlDto;
use NexiNetsCore\Interfaces\CustomerInterface;
use NexiNetsCore\Interfaces\PaymentMethodDetailsInterface;
use NexiNetsCore\Interfaces\PaymentObjectInterface;

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
}
