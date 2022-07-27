<?php

namespace NetsCore\Clients;

use NetsCore\Configuration;
use NetsCore\Interfaces\APIClientInterface;

class NetsEasyAPIClient implements APIClientInterface
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