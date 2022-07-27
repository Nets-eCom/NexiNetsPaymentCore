<?php

namespace NetsCore\Factory;

use NetsCore\Configuration;

class AuthFactory
{
    public function getAuthenticationService(Configuration $configuration, string $clientType) {
        $class = '\NetsCore\Auth\\' . $clientType . 'AuthService';

        return new $class($configuration);
    }
}