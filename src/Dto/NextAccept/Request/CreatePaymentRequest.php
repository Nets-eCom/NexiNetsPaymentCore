<?php

namespace NetsCore\Dto\NextAccept\Request;

use Exception;
use NetsCore\Dto\NextAccept\BasketItem;
use NetsCore\Enums\CurrencyCode;
use NetsCore\Interfaces\CustomerInterface;
use NetsCore\Interfaces\PaymentMethodDetailsInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class PaymentObjectDto implements PaymentObjectInterface
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
     * @var BasketItem[]
     */
    public array $basket;

    /**
     * @throws Exception
     */
    public function validated_currency_code($currencyCode)
    {
        if (CurrencyCode::isValid($currencyCode)) {
            return $currencyCode;
        } else {
            throw new Exception(
                'Wrong currency code'
            );
        }
    }
}
