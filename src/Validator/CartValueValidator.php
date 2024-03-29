<?php

namespace NexiNetsCore\Validator;

use NexiNetsCore\Dto\Netaxept\BasketItemDto;
use NexiNetsCore\Enums\ExceptionEnum;
use NexiNetsCore\Exceptions\CartValueException;

class CartValueValidator
{
    /**
     * @param BasketItemDto[] $basket
     * @param int $requestAmount
     *
     * @return bool
     * @throws CartValueException
     */
    public static function cartValueValidator(array $basket, int $requestAmount): bool
    {
        $cartValue = 0;
        foreach ($basket as $item){
            $cartValue += $item->quantity * $item->unitPrice;
        }
        if ($cartValue == $requestAmount){
            return true;
        }
        else
        {
            throw new CartValueException(ExceptionEnum::CART_VALUE_EXCEPTION);
        }
    }


}
