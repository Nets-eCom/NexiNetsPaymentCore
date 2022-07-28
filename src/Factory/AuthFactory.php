<?php

namespace NetsCore\Factory;

use NetsCore\Configuration\NextAcceptConfiguration;

class AuthFactory
{
    public function getAuthenticationService(NextAcceptConfiguration $configuration, string $clientType) {
        $class = '\NetsCore\Auth\\' . $clientType . 'APIAuthService';

        return new $class($configuration);
    }
}