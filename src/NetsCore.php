<?php

namespace NetsCore;

use NetsCore\Factory\APIClientFactory;
use NetsCore\Factory\AuthFactory;
use NetsCore\Factory\ClientFactory;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Services\AuthService;

class NetsCore
{
    private Configuration $configuration;
    private ClientServiceInterface $client;
    private AuthService $authService;

    public function __construct(Configuration $configuration = null)
    {
        $this->configuration = $configuration ?: new Configuration();
        $authService = (new AuthFactory())->getAuthenticationService($this->configuration, $this->configuration->getClientType());
        $this->authService = new AuthService($this->configuration, $authService);
        $client = (new APIClientFactory())->getClient($this->authService->getAuthData(), $this->configuration->getClientType());
        $this->client = (new ClientFactory())->getService($client, $this->configuration->getClientType());
    }

    public function createPayment() {
    }

    public function getPaymentDetails() {
    }

    public function cancelPayment() {
    }

    public function authorizePayment() {
    }

    public function capturePayment() {
    }

    public function refundPayment() {
    }

    public function salePayment() {
    }
}