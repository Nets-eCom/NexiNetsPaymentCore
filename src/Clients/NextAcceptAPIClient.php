<?php

namespace NetsCore\Clients;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use NetsCore\Enums\ApiUrls;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Services\CreatePaymentResponseDto;

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
        //TODO: Implement authorize payment request
    }

    public function cancelPayment()
    {
        //TODO: Implement cancel payment request
    }

    public function capturePayment()
    {
        //TODO: Implement capture payment request
    }

    public function getPaymentDetails()
    {
        //TODO: Implement get  payment details request
    }

    public function refundPayment()
    {
        //TODO: Implement refund payment request
    }

    public function salePayment()
    {
        //TODO: Implement sale payment request
    }

    private function generateHeader(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->authData['token']
        ];
    }
}
