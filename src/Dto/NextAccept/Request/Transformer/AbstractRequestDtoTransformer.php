<?php

namespace NetsCore\Dto\NextAccept\Request\Transformer;

abstract class AbstractRequestDtoTransformer implements RequestDtoTransformerInterface
{
    /**
     * @param  iterable  $objects
     * @return iterable
     */
    public function transformFromObjects(iterable $objects): iterable
    {
        $dto = [];

        foreach ($objects as $object) {
            $dto[] = $this->transformFromObject($object);
        }

        return $dto;
    }
}
