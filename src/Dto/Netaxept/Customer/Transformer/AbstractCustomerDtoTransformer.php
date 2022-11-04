<?php

namespace NetsCore\Dto\Netaxept\Customer\Transformer;

abstract class AbstractCustomerDtoTransformer implements CustomerDtoTransformerInterface
{
    /**
     * @param iterable $objects
     *
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
