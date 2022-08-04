<?php 

declare(strict_types=1);

namespace NetsCore\Services;


     class ResponseDto
{
    /**
     * @Serialization\Type("string")
     */
    public string $redirectUrl;
    //$this->setRedirectUrl(array??);
    //$this->getRedirectUrl();

    /**
     * @Serialization\Type("string")
     */
    public string $transactionId;
    //$this->setTransactionId($transactionId);
    //$this->getTransactionId();
}