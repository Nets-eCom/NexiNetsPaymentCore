<?php

namespace NetsCore\Interfaces;

interface ClientServiceInterface
{
    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject);

    /**
     * @param string $paymentId
     *
     * @return mixed
     */
    public function getPaymentDetails(string $paymentId);

    /**
     * @param PaymentRequestInterface $paymentObject
     *
     * @return mixed
     */
    public function cancelPayment(PaymentRequestInterface $paymentObject);

    /**
     * @param PaymentRequestInterface $authorizationObject
     *
     * @return mixed
     */
    public function authorizePayment(PaymentRequestInterface $authorizationObject);

    /**
     * @param PaymentRequestInterface $capturePayment
     *
     * @return mixed
     */
    public function capturePayment(PaymentRequestInterface $capturePayment);

    /**
     * @param PaymentRequestInterface $refundObject
     *
     * @return mixed
     */
    public function refundPayment(PaymentRequestInterface $refundObject);

    /**
     * @return mixed
     */
    public function salePayment();
}
