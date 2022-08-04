<?php 
declare(strict_types = 1);

namespace NetsCore\Dto\NextAccept\Transformer;

interface RequestDtoTransformerInterface {

    public function transformFromObject($object);
    public function transformFromObjects(iterable $objects): iterable;
}