<?php

declare (strict_types = 1);

namespace NetsCore\Dto\NextAccept\Request\Transfomer;

class AsyncPaymentTrasactionStructTransformer extends AbstractRequestDtoTransformer
{

    /**
     * @param AsyncPaymentTrasactionStruct $asyncPaymentTrasactionStruct
     *
     * @return CustomerPaymentRequest
     */
    public function transformFromObject(AsyncPaymentTrasactionStruct $asyncPaymentTrasactionStruct)
    {

        $dto = new CustomerPaymentRequest();

        $dto->orderNumber = $asyncPaymentTrasactionStruct->order->orderNumber;

        $dto->orderDescription = null;
        //coulnd't find it in AsyncPaymentTrasactionStruct

        $dto->reconciliationReference = null;
        //coulnd't find it in AsyncPaymentTrasactionStruct

        $dto->amount = $asyncPaymentTrasactionStruct->orderasyncPaymentTrasactionStruct->amount;

        $dto->currencyCode = $asyncPaymentTrasactionStruct->orderOrder->currencyId;

        $dto->processing = null;
        //coulnd't find it in AsyncPaymentTrasactionStruct

        $dto->description = null;
        //coulnd't find it in AsyncPaymentTrasactionStruct

        $dto->redirectUrls = $asyncPaymentTrasactionStruct->getReturnUrl();

        $dto->paymentMethodDetails = $asyncPaymentTrasactionStruct->orderasyncPaymentTrasactionStruct->paymentMethodDetails;
        //coulnd't find it in AsyncPaymentTrasactionStruct

        $dto->cusomter = $asyncPaymentTrasactionStruct->order->orderCusomter;
        //doesn't match swagger

        $dto->payPageConfiguration = null;
        //coulnd't find it in AsyncPaymentTrasactionStruct

        $dto->basket = null;
        //coulnd't find it in AsyncPaymentTrasaction

        return $dto;

    }

}
