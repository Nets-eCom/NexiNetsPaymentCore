<?php

namespace NetsCore\Dto\Netaxeptt\Request\Transformer;

use NetsCore\Dto\Netaxept\Request\PaymentObject;

interface RequestDtoTransformerInterface
{
    /**
     * @param $object
     * @return PaymentObject
     */
    public function transformFromObject($object): PaymentObject;

    public function transformFromObjects(iterable $objects): iterable;
}
