<?php

namespace NetsCore\Formatters;

class UserCurrencyInputFormatter
{
    public static function format(string $input): int
    {
        $input = ltrim($input, '0');
        $input = floatval($input);
        $input = round($input, 2) * 100;
        return (int)$input;
    }
}
