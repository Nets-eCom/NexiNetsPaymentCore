<?php

namespace NetsCore\Interfaces;

interface ClientServiceInterface
{
    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject);
    public function getPaymentDetails(string $paymentId);
    public function cancelPayment(PaymentRequestInterface $paymentObject);
    public function authorizePayment(PaymentRequestInterface $authorizationObject);
    public function capturePayment(PaymentRequestInterface $capturePayment);
    public function refundPayment(PaymentRequestInterface $refundObject);
    public function salePayment();
}
