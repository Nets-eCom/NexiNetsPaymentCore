<?php

namespace NetsCore\Services;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NetsEasyService implements ClientServiceInterface
{

    public $client;

    /**
     * @param  APIClientInterface  $apiClient
     */
    public function __construct(APIClientInterface $apiClient)
    {
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
    {
        return $this->client->createPayment($paymentObject);
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
