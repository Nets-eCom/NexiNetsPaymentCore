<?php

namespace NetsCore\Services;

use NetsCore\Interfaces\ConfigurationInterface;

class LogsService
{
    private ConfigurationInterface $configuration;

    /**
     * @param  ConfigurationInterface  $configuration
     */
    public function __construct(ConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param $message
     * @param  array  $data
     * @return false|int
     */
    public function logger($message, array $data)
    {

        if (!is_dir($this->configuration->getDebugLogDir())) {
            mkdir($this->configuration->getDebugLogDir(), 0777, true);
        }

        foreach ($data as $key => $val) {
            $message = str_replace("%$key%", $val, $message);
        }

        $message .= PHP_EOL;

        return file_put_contents($this->configuration->getDebugLogDir() . '/' . $this->configuration->getDebugLogFile(), $message, FILE_APPEND);
    }
}
