<?php

namespace NetsCore\Factory;

class APIClientFactory
{
    public function getClient(array $authData, string $clientType) {
        $class = '\NetsCore\Clients\\' . $clientType . 'APIClient';

        return new $class($authData);
    }
}