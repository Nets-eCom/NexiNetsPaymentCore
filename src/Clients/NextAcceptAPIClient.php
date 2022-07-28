<?php

namespace NetsCore\Clients;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use NetsCore\Enums\ApiUrls;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NextAcceptAPIClient implements APIClientInterface
{

    protected array $authData;
    private Client $httpClient;

    public function __construct(array $authData, Client $client = null)
    {
        $this->authData = $authData;
        $this->httpClient = $client ?: new Client();
    }

    public function createPayment(PaymentObjectInterface $paymentObject)
    {
        $request = new Request('POST', ApiUrls::NextAcceptPaymentService, $this->generateHeader(), json_encode($paymentObject));
        $res = $this->httpClient->sendAsync($request)->wait();
        return $res->getBody();
    }

    public function authorizePayment()
    {
    }

    public function cancelPayment()
    {
    }

    public function capturePayment()
    {
    }

    public function getPaymentDetails()
    {
    }

    public function refundPayment()
    {
    }

    public function salePayment()
    {
    }

    private function generateHeader(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->authData['token']
        ];
    }
}