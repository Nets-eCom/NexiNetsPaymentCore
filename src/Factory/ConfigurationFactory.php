<?php

namespace NexiNetsCore\Factory;

use NexiNetsCore\Interfaces\ConfigurationInterface;

class ConfigurationFactory
{
    /**
     * @param  string  $integrationType
     * @return ConfigurationInterface
     */
    public function getConfiguration(string $integrationType): ConfigurationInterface
    {
        $configuration = '\NexiNetsCore\Configuration\\' . $integrationType . 'Configuration';

        return new $configuration();
    }
}
