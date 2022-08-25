<?php

namespace NetsCore\Factory;

use NetsCore\Configuration\NextAcceptConfiguration;

class AuthFactory
{
    /**
     * @param  NextAcceptConfiguration  $configuration
     * @param  string  $clientType
     * @return mixed
     */
    public function getAuthenticationService(NextAcceptConfiguration $configuration, string $clientType)
    {
        $class = '\NetsCore\Auth\\' . $clientType . 'APIAuthService';

        return new $class($configuration);
    }
}
