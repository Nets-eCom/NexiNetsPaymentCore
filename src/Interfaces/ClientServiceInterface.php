<?php

namespace NetsCore\Interfaces;

interface ClientServiceInterface
{
    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject);
    public function getPaymentDetails();
    public function cancelPayment(PaymentObjectInterface $paymentObject);
    public function authorizePayment(AuthorizePaymentRequestInterface $authorizationObject);
    public function capturePayment();
    public function refundPayment();
    public function salePayment();
}
