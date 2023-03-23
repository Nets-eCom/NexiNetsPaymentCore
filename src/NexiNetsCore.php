<?php

namespace NexiNetsCore;

use NexiNetsCore\Configuration\NetaxeptConfiguration;
use NexiNetsCore\Dto\Netaxept\Response\AuthorizePaymentResponseDto;
use NexiNetsCore\Dto\Netaxept\Response\CapturePaymentResponseDto;
use NexiNetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NexiNetsCore\Dto\Netaxept\Response\PaymentDetailResponseDto;
use NexiNetsCore\Dto\Netaxept\Response\RefundPaymentResponseDto;
use NexiNetsCore\Exceptions\ApiResponseException;
use NexiNetsCore\Factory\APIClientFactory;
use NexiNetsCore\Factory\AuthFactory;
use NexiNetsCore\Factory\ClientFactory;
use NexiNetsCore\Interfaces\APIAuthServiceInterface;
use NexiNetsCore\Interfaces\ClientServiceInterface;
use NexiNetsCore\Interfaces\ConfigurationInterface;
use NexiNetsCore\Interfaces\PaymentObjectInterface;
use NexiNetsCore\Interfaces\PaymentRequestInterface;
use NexiNetsCore\Services\AuthService;

class NexiNetsCore
{
    private ConfigurationInterface $configuration;
    private APIAuthServiceInterface $authService;

    /**
     * @param ConfigurationInterface|null $configuration
     *
     * @return void
     */
    public function setup(ConfigurationInterface $configuration = null)
    {
        $this->configuration = $configuration ?: new NetaxeptConfiguration();
        $this->authService = (new AuthFactory())->getAuthenticationService($this->configuration, $this->configuration->getClientType());
    }

    /**
     * @param PaymentObjectInterface $paymentObject
     *
     * @return CreatePaymentResponseDto
     */
    public function createPayment(PaymentObjectInterface $paymentObject): CreatePaymentResponseDto
    {
        return $this->getClient()->createPayment($paymentObject);
    }

    /**
     * @param string $paymentId
     *
     * @return PaymentDetailResponseDto
     */
    public function getPaymentDetails(string $paymentId): PaymentDetailResponseDto
    {
        return $this->getClient()->getPaymentDetails($paymentId);
    }

    /**
     * @param PaymentRequestInterface $paymentObject
     *
     * @return mixed
     */
    public function cancelPayment(PaymentRequestInterface $paymentObject)
    {
        return $this->getClient()->cancelPayment($paymentObject);
    }

    /**
     * @param PaymentRequestInterface $authorizationObject
     *
     * @return AuthorizePaymentResponseDto
     * @throws ApiResponseException
     */
    public function authorizePayment(PaymentRequestInterface $authorizationObject): AuthorizePaymentResponseDto
    {
        try {
            return $this->getClient()->authorizePayment($authorizationObject);
        } catch (ApiResponseException $e) {
            throw new ApiResponseException();
        }
    }

    /**
     * @param PaymentRequestInterface $capturePayment
     *
     * @return CapturePaymentResponseDto
     * @throws ApiResponseException
     */
    public function capturePayment(PaymentRequestInterface $capturePayment): CapturePaymentResponseDto
    {
        try {
            return $this->getClient()->capturePayment($capturePayment);
        } catch (ApiResponseException $e) {
            throw new ApiResponseException();
        }
    }

    /**
     * @param PaymentRequestInterface $refundObject
     *
     * @return RefundPaymentResponseDto
     */
    public function refundPayment(PaymentRequestInterface $refundObject): RefundPaymentResponseDto
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
    protected function getClient(): ClientServiceInterface
    {
        $authService = new AuthService($this->configuration, $this->authService);
        $apiClient = (new APIClientFactory())->getClient($authService->getAuthData(), $this->configuration->getClientType());
        return (new ClientFactory())->getService($apiClient, $this->configuration->getClientType());
    }
}
