<?php

namespace NetsCore\Dto\Netaxept\Request\Transformer;

use NetsCore\Dto\Netaxept\Request\RefundPaymentRequest;

class RefundPaymentRequestTransformer extends AbstractRequestDtoTransformer
{
    /**
     * @param $object
     *
     * @return RefundPaymentRequest
     */
    public function transformFromObject($object) : RefundPaymentRequest
    {
        $dto = new RefundPaymentRequest();

        $dto->paymentId = $object->getPaymentId();
        $dto->amount = $object->amount;
        $dto->description = $object->description;
        $dto->basket = $object->basket;

        return $dto;
    }
}
