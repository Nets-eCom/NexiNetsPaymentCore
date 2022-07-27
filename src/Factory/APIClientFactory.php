<?php

namespace NetsCore\Factory;

use NetsCore\Configuration;

class APIClientFactory
{
    public function getClient(array $authData, string $clientType) {
        $class = '\NetsCore\Clients\\' . $clientType . 'APIClient';

        return new $class($authData);
    }
}