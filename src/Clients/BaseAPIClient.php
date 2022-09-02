<?php

namespace NetsCore\Clients;

use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class BaseAPIClient implements APIClientInterface
{
    private string $host;

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return void
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
    {
    }

    public function getPaymentDetails()
    {
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return void
     */
    public function cancelPayment(PaymentObjectInterface $paymentObject)
    {
    }

    public function authorizePayment()
    {
    }

    public function capturePayment()
    {
    }

    public function refundPayment(PaymentObjectInterface $paymentObject)
    {
    }

    public function salePayment()
    {
    }


    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param  string  $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }
}
