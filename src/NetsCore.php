<?php

namespace NetsCore;

use NetsCore\Configuration\NetaxeptConfiguration;
use NetsCore\Dto\Netaxept\Response\AuthorizePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CapturePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\PaymentDetailResponseDto;
use NetsCore\Dto\Netaxept\Response\RefundPaymentResponseDto;
use NetsCore\Exceptions\ApiResponseException;
use NetsCore\Factory\APIClientFactory;
use NetsCore\Factory\AuthFactory;
use NetsCore\Factory\ClientFactory;
use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Interfaces\PaymentRequestInterface;
use NetsCore\Services\AuthService;

class NetsCore
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
