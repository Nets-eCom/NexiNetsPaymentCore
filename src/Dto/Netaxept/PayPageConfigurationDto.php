<?php

namespace NetsCore\Dto\Netaxept;

use NetsCore\Enums\PageTypeEnum;

class PayPageConfigurationDto
{
    /**
     * @var PaymentMethodActionInfoDto[]
     */
    public ?array $paymentMethodActionInfo;
    public string $language;
    public string $pageType;
    public string $templateName;

    /**
     * @param string $language
     * @return PayPageConfigurationDto
     */
    public function setLanguage(string $language): PayPageConfigurationDto
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $pageType
     * @return PayPageConfigurationDto
     */
    public function setPageType(string $pageType): PayPageConfigurationDto
    {
        if (strlen($pageType) == 0){
            $this->pageType = PageTypeEnum::MULTIPAGE;
        }else{
            $this->pageType = $pageType;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getPageType(): string
    {
        return $this->pageType;
    }

    /**
     * @param string $templateName
     * @return PayPageConfigurationDto
     */
    public function setTemplateName(string $templateName): PayPageConfigurationDto
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }
}
