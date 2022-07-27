<?php

namespace NetsCore\Dto\NextAccept;

class PayPageConfiguration
{
    /**
     * @var PaymentMethodActionInfo[]
     */
    public array $paymentMethodActionInfo;
    public string $language;
    public string $pageType;
    public string $templateName;
}