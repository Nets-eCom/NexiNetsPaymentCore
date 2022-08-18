<?php

namespace NetsCore\Clients;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NetsEasyAPIClient implements APIClientInterface
{
    protected array $authData;

    /**
     * @param  array  $authData
     */
    public function __construct(array $authData)
    {
        $this->authData = $authData;
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return void
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
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
