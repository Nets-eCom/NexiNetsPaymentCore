<?php

namespace NetsCore\Services;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NetsEasyService implements ClientServiceInterface
{

    private APIClientInterface $client;
    private LogsService $logsService;

    public function __construct(APIClientInterface $client)
    {
    }

    function createPayment(PaymentObjectInterface $paymentObject)
    {
        return $this->client->createPayment($paymentObject);
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