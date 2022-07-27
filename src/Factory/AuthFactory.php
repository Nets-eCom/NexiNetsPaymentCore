<?php

namespace NetsCore\Factory;

use NetsCore\Configuration;

class AuthFactory
{
    public function getAuthenticationService(Configuration $configuration, string $clientType) {
        $class = '\NetsCore\Auth\\' . $clientType . 'APIAuthService';

        return new $class($configuration);
    }
}