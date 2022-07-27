<?php

namespace NetsCore\Clients;

use NetsCore\Interfaces\APIClientInterface;

class BaseAPIClient implements APIClientInterface
{
    private string $host;

    function createPayment()
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