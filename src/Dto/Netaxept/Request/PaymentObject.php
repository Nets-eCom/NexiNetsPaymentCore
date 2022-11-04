<?php

namespace NetsCore\Dto\Netaxept\Request;

use NetsCore\Dto\Netaxept\BasketItemDto;
use NetsCore\Dto\Netaxept\PayPageConfigurationDto;
use NetsCore\Dto\Netaxept\RedirectUrlDto;
use NetsCore\Enums\LanguageEnum;
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

    /**
     * @param string $language
     *
     * @return void
     */
    public function setLanguage(string $language)
    {
        $this->payPageConfiguration = new PayPageConfigurationDto();
        switch ($language)
        {
            case 'English':
                $this->payPageConfiguration->language = LanguageEnum::EN;
                break;
            case 'Deutsch':
                $this->payPageConfiguration->language = LanguageEnum::DE;
                break;
            default:
                $this->payPageConfiguration->language = LanguageEnum::EN;
        }
    }
}
