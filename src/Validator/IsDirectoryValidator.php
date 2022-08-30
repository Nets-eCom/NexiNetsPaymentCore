<?php

namespace NetsCore\Validator;

class IsDirectoryValidator
{
    public static function valid(string $path): bool
    {
        return is_dir($path);
    }
}
