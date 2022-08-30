<?php

namespace NetsCore\Dto\Netaxept\Request\Transformer;

use NetsCore\Dto\Netaxept\Request\AuthorizePaymentRequest;
use NetsCore\Dto\Netaxept\Request\PaymentObject;

class AuthorizePaymentRequestTransformer extends AbstractRequestDtoTransformer
{
    /**
     * @param PaymentObject $object
     *
     * @return AuthorizePaymentRequest
     */
    public function transformFromObject($object): AuthorizePaymentRequest
    {
        $dto = new AuthorizePaymentRequest();

        $dto->paymentId = $object->getPaymentId();
        $dto->amount = $object->amount;
        $dto->description = $object->description;

        return $dto;
    }
}
