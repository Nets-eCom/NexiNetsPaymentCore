<?php

namespace NetsCore\Dto\NextAccept\Transformer;

use NetsCore\Dto\NextAccept\Request\CreatePaymentRequest;
use Shopware\Core\Checkout\Payment\Cart\AsyncPaymentTransactionStruct;

interface RequestDtoTransformerInterface
{
    /**
     * @param AsyncPaymentTransactionStruct $asyncPaymentTransactionStruct
     *
     * @return CreatePaymentRequest
     */
    public function transformFromObject(AsyncPaymentTransactionStruct $asyncPaymentTransactionStruct): CreatePaymentRequest;
    public function transformFromObjects(iterable $objects): iterable;
}
