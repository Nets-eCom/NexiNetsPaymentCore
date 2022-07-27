<?php

namespace NetsCore\Services;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\ClientServiceInterface;

class NextAcceptService implements ClientServiceInterface
{

    public function __construct(APIClientInterface $client)
    {
    }

    function createPayment()
    {
        // TODO: Implement createPayment() method.
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