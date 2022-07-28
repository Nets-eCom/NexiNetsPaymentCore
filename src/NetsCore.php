<?php

namespace NetsCore;

use NetsCore\Configuration\NextAcceptConfiguration;
use NetsCore\Factory\APIClientFactory;
use NetsCore\Factory\AuthFactory;
use NetsCore\Factory\ClientFactory;
use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Services\AuthService;
use NetsCore\Services\LogsService;

class NetsCore
{
    private ConfigurationInterface $configuration;
    private ClientServiceInterface $client;
    private APIClientInterface $apiClient;
    private APIAuthServiceInterface $authService;

    public function __construct(ConfigurationInterface $configuration = null)
    {
        $this->configuration = $configuration ?: new NextAcceptConfiguration();

        $this->authService = (new AuthFactory())->getAuthenticationService($this->configuration, $this->configuration->getClientType());

        $authService = new AuthService($this->configuration, $this->authService);

        $this->apiClient = (new APIClientFactory())->getClient($authService->getAuthData(), $this->configuration->getClientType());
        $this->client = (new ClientFactory())->getService($this->apiClient, $this->configuration->getClientType());

        $this->logger = new LogsService($this->configuration);
    }

    public function createPayment(PaymentObjectInterface $paymentObject) {
        $this->logger->logger(json_encode($paymentObject), []);
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