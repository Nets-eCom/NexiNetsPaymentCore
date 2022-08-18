<?php

namespace NetsCore\Factory;

use NetsCore\Interfaces\ConfigurationInterface;

class ConfigurationFactory
{
    /**
     * @param  string  $integrationType
     * @return ConfigurationInterface
     */
    public function getConfiguration(string $integrationType): ConfigurationInterface
    {
        $configuration = '\NetsCore\Configuration\\' . $integrationType . 'Configuration';

        return new $configuration();
    }
}
