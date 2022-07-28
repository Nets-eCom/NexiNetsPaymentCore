<?php

namespace NetsCore\Clients;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class BaseAPIClient implements APIClientInterface
{
    private string $host;

    function createPayment(PaymentObjectInterface $paymentObject)
    {
    }

    function getPaymentDetails()
    {
    }

    function cancelPayment()
    {
    }

    function authorizePayment()
    {
    }

    function capturePayment()
    {
    }

    function refundPayment()
    {
    }

    function salePayment()
    {
    }


    public function getHost(): string
    {
        return $this->host;
    }

    public function setHost(string $host): void
    {
        $this->host = $host;
    }
}