<?php

namespace NexiNetsCore\Dto\Netaxept\Customer\Transformer;

interface CustomerDtoTransformerInterface
{
    /**
     * @param $object
     * @return mixed
     */
    public function transformFromObject($object);

    /**
     * @param  iterable  $objects
     * @return iterable
     */
    public function transformFromObjects(iterable $objects): iterable;
}
