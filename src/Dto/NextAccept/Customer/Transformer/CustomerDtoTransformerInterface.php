<?php

namespace NetsCore\Dto\NextAccept\Customer\Transformer;


interface CustomerDtoTransformerInterface
{

    public function transformFromObject($object);

    public function transformFromObjects(iterable $objects): iterable;
}
