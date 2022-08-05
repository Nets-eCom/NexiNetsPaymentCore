<?php

namespace NetsCore\Dto\NextAccept\Request\Transfomer;

use NetsCore\Dto\NextAccept\Transformer\RequestDtoTransformerInterface;

abstract class AbstractRequestDtoTransformer implements RequestDtoTransformerInterface
{

    public function transformFromObjects(iterable $objects): iterable
    {
        $dto = [];

        foreach ($objects as $object) {
            $dto[] = $this->transformFromObject($object);
        }

        return $dto;
    }
}
