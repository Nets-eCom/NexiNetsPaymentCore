<?php

namespace NexiNetsCore\Formatters;

class UserCurrencyInputFormatter
{
    /**
     * @param string $input
     *
     * @return int
     */
    public static function format(string $input): int
    {
        $input = ltrim($input, '0');
        $input = floatval($input);
        $input = round($input, 2) * 100;
        return (int)round($input, 0);
    }
}
