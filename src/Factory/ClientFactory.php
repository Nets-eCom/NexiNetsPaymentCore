<?php

namespace NetsCore\Factory;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;

class ClientFactory
{
    /**
     * @param  APIClientInterface  $clientFactory
     * @param  string  $integrationType
     * @return ClientServiceInterface
     */
    public function getService(APIClientInterface $clientFactory, string $integrationType): ClientServiceInterface
    {
        $service = '\NetsCore\Services\\' . $integrationType . 'Service';

        return new $service($clientFactory);
    }
}
