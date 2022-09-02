<?php

namespace NetsCore\Services;

use Exception;
use NetsCore\Validator\IsDirectoryValidator;

class LogsService
{
    public static function logger($message, string $path = '../logs', string $fileName = 'debug.log')
    {
        if (!IsDirectoryValidator::valid($path)) {
            try {
                mkdir($path, 0777, true);
            } catch (Exception $e) {
                return;
            }
        }

        $message .= PHP_EOL;

        file_put_contents($path . '/' . $fileName, $message, FILE_APPEND);
    }
}
