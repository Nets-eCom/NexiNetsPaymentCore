<?php

namespace NetsCore\Factory;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;

class ClientFactory
{
    public function getService(APIClientInterface $clientFactory, string $integrationType): ClientServiceInterface {
        $service = '\NetsCore\Services\\' . $integrationType . 'Service';

        return new $service($clientFactory);
    }
}