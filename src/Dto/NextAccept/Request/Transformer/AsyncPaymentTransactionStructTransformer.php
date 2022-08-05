<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

use NetsCore\Dto\NextAccept\PayPageConfiguration;
use NetsCore\Dto\NextAccept\RedirectUrl;
use NetsCore\Dto\NextAccept\Request\CreatePaymentRequest;
use NetsCore\Dto\NextAccept\Request\Transfomer\AbstractRequestDtoTransformer;
use NetsCore\Enums\CurrencyCode;
use NetsCore\Enums\PaymentProcessingType;
use NetsCore\Enums\PaymentType;
use Shopware\Core\Checkout\Payment\Cart\AsyncPaymentTransactionStruct;
use Shopware\Core\Checkout\Payment\Exception\AsyncPaymentProcessException;


class AsyncPaymentTransactionStructTransformer extends AbstractRequestDtoTransformer
{

    /**
     * @param AsyncPaymentTransactionStruct $asyncPaymentTransactionStruct
     *
     * @return CreatePaymentRequest
     * @throws AsyncPaymentProcessException if the provided currency code is not valid
     *
     */
    public function transformFromObject(AsyncPaymentTransactionStruct $asyncPaymentTransactionStruct
    ): CreatePaymentRequest {
        $dto = new CreatePaymentRequest();

        $dto->type = PaymentType::MerchantHostedEcom;

        $dto->orderNumber = $asyncPaymentTransactionStruct->getOrder()->getOrderNumber();

        $dto->orderDescription = null;

        $dto->reconciliationReference = null;

        $amount      = $asyncPaymentTransactionStruct->getOrderTransaction()->getAmount();
        $dto->amount = ceil($amount * 100);

        $currencyCode = $asyncPaymentTransactionStruct->getOrder()->getCurrencyId();
        if (CurrencyCode::isValid($currencyCode)) {
            $dto->currencyCode = $currencyCode;
        } else {
            throw new AsyncPaymentProcessException(
                $asyncPaymentTransactionStruct->getOrderTransaction()->getId(),
                'Wrong currency code'
            );
        }

        $dto->processing = PaymentProcessingType::None;

        $dto->description = null;

        $dto->redirectUrls = new RedirectUrl();

        $dto->paymentMethodDetails = null;

        $dto->customer = null;

        $dto->payPageConfiguration = new PayPageConfiguration();

        $dto->basket = [];

        return $dto;
    }

}
