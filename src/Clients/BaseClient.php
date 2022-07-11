<?php

namespace NetsCore\Clients;

use NetsCore\Interfaces\ClientInterface;

class BaseClient implements ClientInterface
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