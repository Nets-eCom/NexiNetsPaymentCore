<?php

namespace NetsCore\Services;

class LogsService
{
    public static function logger($message, array $data, string $path = '../logs')
    {

        if(!is_dir($path)) {
            mkdir($path,0777, true);
        }

        foreach ($data as $key => $val) {
            $message = str_replace("%$key%", $val, $message);
        }

        $message .= PHP_EOL;

        file_put_contents($path . '/debug.log', $message, FILE_APPEND);
    }
}