<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

use NetsCore\Interfaces\CustomerInterface;

interface RequestDtoTransformerInterface
{
    /**
     * @return CustomerInterface
     */
    public function transformFromObject($object): CustomerInterface;

    public function transformFromObjects(iterable $objects): iterable;
}
