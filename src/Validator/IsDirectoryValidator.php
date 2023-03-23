<?php

namespace NexiNetsCore\Validator;

class IsDirectoryValidator
{
    /**
     * @param string $path
     *
     * @return bool
     */
    public static function valid(string $path): bool
    {
        return is_dir($path);
    }
}
