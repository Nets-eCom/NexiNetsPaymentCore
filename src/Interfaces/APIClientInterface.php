<?php

namespace NetsCore\Interfaces;

interface APIClientInterface
{
    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject);
    public function getPaymentDetails();
    public function cancelPayment(PaymentObjectInterface $paymentObject);
    public function authorizePayment(AuthorizePaymentRequestInterface $authorizationObject);
    public function capturePayment(CapturePaymentInterface $capturePayment);
    public function refundPayment(PaymentObjectInterface $paymentObject);
    public function salePayment();
}
