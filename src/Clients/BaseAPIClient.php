<?php

namespace NexiNetsCore\Clients;

use NexiNetsCore\Interfaces\APIClientInterface;
use NexiNetsCore\Interfaces\PaymentObjectInterface;

class BaseAPIClient implements APIClientInterface
{
    private string $host;

    /**
     * @param PaymentObjectInterface $paymentObject
     *
     * @return mixed|void
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
    {
    }

    public function getPaymentDetails()
    {
    }

    /**
     * @param PaymentObjectInterface $paymentObject
     *
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

    public function refundPayment()
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
     * @param string $host
     *
     * @return void
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }
}
