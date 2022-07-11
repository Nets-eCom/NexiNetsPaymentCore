<?php

namespace NetsCore\Interfaces;

interface ClientInterface
{
    function createPayment();
    function getPaymentDetails();
    function cancelPayment();
    function authorizePayment();
    function capturePayment();
    function refundPayment();
    function salePayment();
}