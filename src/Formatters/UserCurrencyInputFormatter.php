<?php

namespace NetsCore\Formatters;

class UserCurrencyInputFormatter
{
    public static function format(string $input): int
    {
        $input = str_replace(',', '.', $input);
        return round((float)$input, 2) * 100;
    }
}
