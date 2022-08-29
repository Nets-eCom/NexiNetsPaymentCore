<?php

namespace NetsCore\Services;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\CapturePaymentInterface;
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


    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function cancelPayment(PaymentObjectInterface $paymentObject)
    {
        // TODO: Implement cancelPayment() method.
        return $this->client->cancelPayment($paymentObject);
    }

    public function authorizePayment()
    {
        // TODO: Implement authorizePayment() method.
    }

    public function capturePayment(CapturePaymentInterface $capturePayment)
    {
        // TODO: Implement capturePayment() method.
    }

    public function refundPayment(PaymentObjectInterface $paymentObject)
    {
        // TODO: Implement refundPayment() method.
        return $this->client->refundPayment($paymentObject);
    }

    public function salePayment()
    {
        // TODO: Implement salePayment() method.
    }
}
