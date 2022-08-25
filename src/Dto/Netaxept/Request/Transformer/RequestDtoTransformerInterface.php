<?php

namespace NetsCore\Dto\Netaxept\Request\Transformer;

use NetsCore\Dto\Netaxept\Request\PaymentObject;

interface RequestDtoTransformerInterface
{
    /**
     * @param $object
     * @return object
     */
    public function transformFromObject($object): object;

    public function transformFromObjects(iterable $objects): iterable;
}
