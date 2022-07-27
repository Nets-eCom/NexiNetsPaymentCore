<?php

namespace NetsCore\Clients;

use NetsCore\Interfaces\APIClientInterface;

class NextAcceptAPIClient implements APIClientInterface
{

    protected array $authData;

    public function __construct(array $authData)
    {
        $this->authData = $authData;
    }

    public function createPayment()
    {
    }

    public function authorizePayment()
    {
    }

    public function cancelPayment()
    {
    }

    public function capturePayment()
    {
    }

    public function getPaymentDetails()
    {
    }

    public function refundPayment()
    {
    }

    public function salePayment()
    {
    }
}