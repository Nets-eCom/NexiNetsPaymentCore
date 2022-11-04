<?php

namespace NetsCore\Interfaces;

interface RequestDtoTransformerInterface
{
    /**
     * @param $object
     * @return object
     */
    public function transformFromObject($object): object;

    /**
     * @param iterable $objects
     *
     * @return iterable
     */
    public function transformFromObjects(iterable $objects): iterable;
}
