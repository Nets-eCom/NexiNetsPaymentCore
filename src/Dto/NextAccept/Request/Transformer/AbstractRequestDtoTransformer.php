<?php

declare(strict_types = 1);

namespace NetsCore\Dto\NextAccept\Request\Transfomer;

abstract class AbstractRequestDtoTransformer implements RequestDtoTransformerInterface {

    public function transformFromObjects(iterable $objects): iterable {
        $dto = [];

        foreach ($objects as $object) {
            $dto[] = $this->transformFromObject($object);
        }

        return $dto;
    }
}
