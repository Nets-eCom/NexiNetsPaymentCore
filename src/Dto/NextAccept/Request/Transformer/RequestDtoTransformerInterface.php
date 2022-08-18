<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

use NetsCore\Dto\NextAccept\Request\PaymentObject;

interface RequestDtoTransformerInterface
{
    /**
     * @param $object
     * @return PaymentObject
     */
    public function transformFromObject($object): PaymentObject;

    public function transformFromObjects(iterable $objects): iterable;
}
