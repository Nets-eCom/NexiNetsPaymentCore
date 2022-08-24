<?php

namespace NetsCore\Services;

use NetsCore\Dto\Netaxept\CreatePaymentResponseDto;
use NetsCore\Dto\Netaxept\CancelPaymentResponseDto;
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

    public function cancelPayment(PaymentObjectInterface $paymentObject): CancelPaymentResponseDto
    {
        // TODO: Implement cancelPayment() method.
        $response = $this->apiClient->cancelPayment($paymentObject);
        $map = new CancelPaymentResponseDto();
        $map->paymentId = $response['paymentId'];
        return $map;
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
