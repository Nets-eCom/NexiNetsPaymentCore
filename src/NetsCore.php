<?php

namespace NetsCore;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class NetsCore
{
    private ClientInterface $client;
    private Configuration $configuration;
    private HeaderSelector $headerSelector;

    public function __construct(ClientInterface $client = null, Configuration $configuration = null, HeaderSelector $selector = null)
    {
        $this->client = $client ?: new Client();
        $this->configuration = $configuration ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public function createPayment($body = null) {

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