<?php

namespace NetsCore\Factory;

class ClientFactory
{
    public function getService(APIClientFactory $clientFactory, string $integrationType) {
        $service = '\NetsCore\Services\\' . $integrationType . 'Client';

        return new $service($clientFactory);
    }
}