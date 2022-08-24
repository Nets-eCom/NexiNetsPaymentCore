<?php

namespace NetsCore\Dto\Netaxept\Request;

use Exception;
use NetsCore\Dto\Netaxept\BasketItemDto;
use NetsCore\Enums\CurrencyCodeEnum;
use NetsCore\Dto\Netaxept\PayPageConfigurationDto;
use NetsCore\Dto\Netaxept\RedirectUrlDto;
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

    /**
     * @param $currencyCode
     * @return mixed
     * @throws Exception
     */
    public function validatedCurrencyCode($currencyCode)
    {
        if (CurrencyCodeEnum::isValid($currencyCode)) {
            return $currencyCode;
        } else {
            throw new Exception(
                'Wrong currency code'
            );
        }
    }
}
