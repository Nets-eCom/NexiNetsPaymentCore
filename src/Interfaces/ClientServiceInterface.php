<?php

namespace NetsCore\Interfaces;

interface ClientServiceInterface
{
    function createPayment();
    function getPaymentDetails();
    function cancelPayment();
    function authorizePayment();
    function capturePayment();
    function refundPayment();
    function salePayment();
}