<?php

namespace NetsCore\Dto\NextAccept\Customer\Transformer;


abstract class AbstractCustomerDtoTransformer implements CustomerDtoTransformerInterface
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
