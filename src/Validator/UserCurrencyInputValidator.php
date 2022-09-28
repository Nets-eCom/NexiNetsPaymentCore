<?php

namespace NetsCore\Validator;

use NetsCore\Services\LogsService;

class UserCurrencyInputValidator
{
    public static function valid(string $input): bool
    {
        preg_match("/^-?\d+(?:\.\d{1,2})?$/", $input, $matches);
        LogsService::logger(json_encode($matches));

        return (bool)$matches;
    }
}
