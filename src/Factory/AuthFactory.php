<?php

namespace NexiNetsCore\Factory;

use NexiNetsCore\Configuration\NetaxeptConfiguration;
use NexiNetsCore\Interfaces\ConfigurationInterface;

class AuthFactory
{
    /**
     * @param  NetaxeptConfiguration $configuration
     * @param  string  $clientType
     *
     * @return mixed
     */
    public function getAuthenticationService(ConfigurationInterface $configuration, string $clientType)
    {
        $class = '\NexiNetsCore\Auth\\' . $clientType . 'APIAuthService';

        return new $class($configuration);
    }
}
