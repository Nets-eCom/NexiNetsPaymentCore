<?php

namespace NetsCore\Factory;

use NetsCore\Configuration\NetaxeptConfiguration;

class AuthFactory
{
    /**
     * @param  NetaxeptConfiguration $configuration
     * @param  string  $clientType
     *
     * @return mixed
     */
    public function getAuthenticationService(NetaxeptConfiguration $configuration, string $clientType)
    {
        $class = '\NetsCore\Auth\\' . $clientType . 'APIAuthService';

        return new $class($configuration);
    }
}
