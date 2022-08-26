<?php

namespace NetsCore\Dto\NextAccept\Request;

use Exception;
use NetsCore\Dto\NextAccept\BasketItemDto;
use NetsCore\Enums\CurrencyCodeEnum;
use NetsCore\Dto\NextAccept\PayPageConfigurationDto;
use NetsCore\Dto\NextAccept\RedirectUrlDto;
use NetsCore\Interfaces\CustomerInterface;
use NetsCore\Interfaces\PaymentMethodDetailsInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class PaymentObject implements PaymentObjectInterface
{
    public string $type;
    public string $orderNumber;
    public string $orderDescription;
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
