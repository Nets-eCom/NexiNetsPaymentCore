<?php

namespace NetsCore\Factory;

class APIClientFactory
{
    /**
     * @param  array  $authData
     * @param  string  $clientType
     * @return mixed
     */
    public function getClient(array $authData, string $clientType)
    {
        $class = '\NetsCore\Clients\\' . $clientType . 'APIClient';

        return new $class($authData);
    }
}
