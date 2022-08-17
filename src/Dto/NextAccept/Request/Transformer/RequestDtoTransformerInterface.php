<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

use NetsCore\Dto\NextAccept\Request\CreatePaymentRequest;

interface RequestDtoTransformerInterface
{
    /**
     * @return CreatePaymentRequest
     */
    public function transformFromObject($object): CreatePaymentRequest;

    public function transformFromObjects(iterable $objects): iterable;
}
