<?php

namespace NetsCore\Dto\Netaxept;

class PayPageConfigurationDto
{
    /**
     * @var PaymentMethodActionInfoDto[]
     */
    public array $paymentMethodActionInfo;
    public string $language;
    public string $pageType;
    public string $templateName;
}
