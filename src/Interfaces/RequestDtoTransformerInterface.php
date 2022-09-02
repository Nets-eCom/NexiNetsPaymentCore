<?php

namespace NetsCore\Interfaces;

interface RequestDtoTransformerInterface
{
    /**
     * @param $object
     * @return object
     */
    public function transformFromObject($object): object;

    public function transformFromObjects(iterable $objects): iterable;
}
