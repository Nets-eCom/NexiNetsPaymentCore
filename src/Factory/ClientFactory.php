<?php

namespace NexiNetsCore\Factory;

use NexiNetsCore\Interfaces\APIClientInterface;
use NexiNetsCore\Interfaces\ClientServiceInterface;

class ClientFactory
{
    /**
     * @param  APIClientInterface  $clientFactory
     * @param  string  $integrationType
     * @return ClientServiceInterface
     */
    public function getService(APIClientInterface $clientFactory, string $integrationType): ClientServiceInterface
    {
        $service = '\NexiNetsCore\Services\\' . $integrationType . 'Service';

        return new $service($clientFactory);
    }
}
