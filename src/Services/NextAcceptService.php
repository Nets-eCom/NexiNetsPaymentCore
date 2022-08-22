<?php

namespace NetsCore\Services;

use NetsCore\Dto\NextAccept\CreatePaymentResponseDto;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NextAcceptService implements ClientServiceInterface
{
    private APIClientInterface $apiClient;

    /**
     * @param  APIClientInterface  $apiClient
     */
    public function __construct(APIClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject): CreatePaymentResponseDto
    {
        $response = $this->apiClient->createPayment($paymentObject);
        return (new CreatePaymentResponseDto())->map($response);
    }

    public function getPaymentDetails()
    {
        // TODO: Implement getPaymentDetails() method.
    }

    public function cancelPayment()
    {
        // TODO: Implement cancelPayment() method.
    }

    public function authorizePayment()
    {
        // TODO: Implement authorizePayment() method.
    }

    public function capturePayment()
    {
        // TODO: Implement capturePayment() method.
    }

    public function refundPayment()
    {
        // TODO: Implement refundPayment() method.
    }

    public function salePayment()
    {
        // TODO: Implement salePayment() method.
    }
}
