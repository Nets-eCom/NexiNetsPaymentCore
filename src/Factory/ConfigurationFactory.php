<?php

namespace NetsCore\Factory;

use NetsCore\Interfaces\ConfigurationInterface;

class ConfigurationFactory
{
    public function getConfiguration(string $integrationType): ConfigurationInterface {
        $configuration = '\NetsCore\Configuration\\' . $integrationType . 'Configuration';

        return new $configuration();
    }
}