<?php

namespace NetsCore\Interfaces;

interface APIClientInterface
{
    function createPayment(PaymentObjectInterface $paymentObject);
    function getPaymentDetails();
    function cancelPayment();
    function authorizePayment();
    function capturePayment();
    function refundPayment();
    function salePayment();
}