<?php

namespace NetsCore;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class NetsCore
{
    private ClientInterface $httpClient;
    private Configuration $configuration;
    private HeaderSelector $headerSelector;

    public function __construct(ClientInterface $httpClient = null, Configuration $configuration = null, HeaderSelector $selector = null)
    {
        $this->httpClient = $httpClient ?: new Client();
        $this->configuration = $configuration ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public function createPayment() {

    }

    public function getPaymentDetails() {

    }

    public function cancelPayment() {

    }

    public function authorizePayment() {

    }

    public function capturePayment() {

    }

    public function refundPayment() {

    }

    public function salePayment() {

    }
}