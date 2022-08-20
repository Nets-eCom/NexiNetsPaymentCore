<?php

namespace NetsCore;

use NetsCore\Configuration\NextAcceptConfiguration;
use NetsCore\Factory\APIClientFactory;
use NetsCore\Factory\AuthFactory;
use NetsCore\Factory\ClientFactory;
use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Services\AuthService;

class NetsCore
{
    private ConfigurationInterface $configuration;
    private APIAuthServiceInterface $authService;

    /**
     * @param  ConfigurationInterface|null  $configuration
     */
    public function setup(ConfigurationInterface $configuration = null)
    {
        $this->configuration = $configuration ?: new NextAcceptConfiguration();
        $this->authService = (new AuthFactory())->getAuthenticationService($this->configuration, $this->configuration->getClientType());
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
    {
        return $this->getClient()->createPayment($paymentObject);
    }

    public function getPaymentDetails()
    {
        //TODO: Create get payment plugin api
    }

    public function cancelPayment()
    {
        //TODO: Create cancel payment plugin api
    }

    public function authorizePayment()
    {
        //TODO: Create authorize payment plugin api
    }

    public function capturePayment()
    {
        //TODO: Create capture payment plugin api
    }

    public function refundPayment()
    {
        //TODO: Create refund payment plugin api
    }

    public function salePayment()
    {
        //TODO: Create sale payment plugin api
    }

    /**
     * @return ClientServiceInterface
     */
    private function getClient(): ClientServiceInterface
    {
        $authService = new AuthService($this->configuration, $this->authService);
        $apiClient = (new APIClientFactory())->getClient($authService->getAuthData(), $this->configuration->getClientType());
        return (new ClientFactory())->getService($apiClient, $this->configuration->getClientType());
    }
}
