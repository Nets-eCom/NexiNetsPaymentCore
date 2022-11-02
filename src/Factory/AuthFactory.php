<?php

namespace NetsCore\Factory;

use NetsCore\Interfaces\ConfigurationInterface;

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
        $class = '\NetsCore\Auth\\' . $clientType . 'APIAuthService';

        return new $class($configuration);
    }
}
