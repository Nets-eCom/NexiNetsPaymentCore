<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

use NetsCore\Dto\NextAccept\Request\AuthorizePaymentRequestDto;
use NetsCore\Dto\NextAccept\Request\PaymentObject;

class AuthorizePaymentRequestTransformer extends AbstractRequestDtoTransformer
{
    /**
     * @param PaymentObject $object
     *
     * @return AuthorizePaymentRequestDto
     */
    public function transformFromObject($object): AuthorizePaymentRequestDto
    {
        $dto = new AuthorizePaymentRequestDto();

        $dto->amount = $object->amount;
        $dto->description = $object->description;

        return $dto;

    }
}
