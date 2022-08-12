<?php

namespace NetsCore\Services;

use NetsCore\Dto\NextAccept\CreatePaymentResponseDto;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NextAcceptService implements ClientServiceInterface
{

    private APIClientInterface $apiClient;

    public function __construct(APIClientInterface $client)
    {
        $this->apiClient = $client;
    }

    function createPayment(PaymentObjectInterface $paymentObject)
    {
        //TODO: Remap object to simple structure

        return $this->apiClient->createPayment($paymentObject);
    }

    function getPaymentDetails()
    {
        // TODO: Implement getPaymentDetails() method.
    }

    function cancelPayment()
    {
        // TODO: Implement cancelPayment() method.
    }

    function authorizePayment()
    {
        // TODO: Implement authorizePayment() method.
    }

    function capturePayment()
    {
        // TODO: Implement capturePayment() method.
    }

    function refundPayment()
    {
        // TODO: Implement refundPayment() method.
    }

    function salePayment()
    {
        // TODO: Implement salePayment() method.
    }
}
