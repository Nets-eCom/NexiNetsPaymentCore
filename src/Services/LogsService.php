<?php

namespace NetsCore\Services;

use NetsCore\Configuration;

class LogsService
{
    private Configuration $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    function logger($message, array $data)
    {

        if(!is_dir($this->configuration->getDebugLogDir())) {
            mkdir($this->configuration->getDebugLogDir(),0777, true);
        }

        foreach ($data as $key => $val) {

            $message = str_replace("%{$key}%", $val, $message);

        }

        $message .= PHP_EOL;

        return file_put_contents($this->configuration->getDebugLogDir() . '/' . $this->configuration->getDebugLogFile(), $message, FILE_APPEND);

    }
}