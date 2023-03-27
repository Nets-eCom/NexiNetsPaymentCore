<?php

namespace NexiNetsCore\Factory;

class APIClientFactory
{
    /**
     * @param  array  $authData
     * @param  string  $clientType
     * @return mixed
     */
    public function getClient(array $authData, string $clientType)
    {
        $class = '\NexiNetsCore\Clients\\' . $clientType . 'APIClient';

        return new $class($authData);
    }
}
