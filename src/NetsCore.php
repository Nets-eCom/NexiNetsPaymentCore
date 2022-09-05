<?php

namespace NetsCore;

use NetsCore\Configuration\NetaxeptConfiguration;
use NetsCore\Dto\Netaxept\Request\PaymentObject;
use NetsCore\Dto\Netaxept\Response\RefundPaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CapturePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NetsCore\Factory\APIClientFactory;
use NetsCore\Factory\AuthFactory;
use NetsCore\Factory\ClientFactory;
use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\AuthorizePaymentRequestInterface;
use NetsCore\Interfaces\CapturePaymentInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Interfaces\RefundPaymentRequestInterface;
use NetsCore\Services\AuthService;

class NetsCore
{
    private ConfigurationInterface $configuration;
    private APIAuthServiceInterface $authService;

    /**
     *
     * @param  ConfigurationInterface|null  $configuration
     */
    public function setup(ConfigurationInterface $configuration = null)
    {
        $this->configuration = $configuration ?: new NetaxeptConfiguration();
        $this->authService = (new AuthFactory())->getAuthenticationService($this->configuration, $this->configuration->getClientType());
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     */
    public function createPayment(PaymentObjectInterface $paymentObject): CreatePaymentResponseDto
    {
        return $this->getClient()->createPayment($paymentObject);
    }

    public function getPaymentDetails(string $paymentId): PaymentObjectInterface
    {
        //TODO: Create get payment plugin api
        return new PaymentObject();
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     */
    public function cancelPayment(PaymentObjectInterface $paymentObject)
    {
        //TODO: Create cancel payment plugin api
        return $this->getClient()->cancelPayment($paymentObject);
    }
    /**
     * @param  AuthorizePaymentRequestInterface $authorizationObject
     */
    public function authorizePayment(AuthorizePaymentRequestInterface $authorizationObject)
    {
        return $this->getClient()->authorizePayment($authorizationObject);
    }

    public function capturePayment(CapturePaymentInterface $capturePayment): CapturePaymentResponseDto
    {
        return $this->getClient()->capturePayment($capturePayment);
    }

    public function refundPayment(RefundPaymentRequestInterface $refundObject) : RefundPaymentResponseDto
    {
        return $this->getClient()->refundPayment($refundObject);
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
