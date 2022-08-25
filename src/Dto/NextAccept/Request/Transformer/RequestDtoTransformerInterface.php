<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

use NetsCore\Dto\NextAccept\Request\PaymentObject;

interface RequestDtoTransformerInterface
{
    /**
     * @param $object
     * @return object
     */
    public function transformFromObject($object): object;

    public function transformFromObjects(iterable $objects): iterable;
}
