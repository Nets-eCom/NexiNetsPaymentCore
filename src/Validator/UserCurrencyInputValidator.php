<?php

namespace NetsCore\Validator;

class UserCurrencyInputValidator
{
    public static function valid(string $input): bool
    {
        preg_match("/^-?\d+(?:\.\d{1,2})?$/", $input, $matches);

        return (bool)$matches;
    }
}
