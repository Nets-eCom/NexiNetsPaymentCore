<?php

namespace NetsCore\Clients;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use NetsCore\Enums\ApiUrlsEnum;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NetaxeptAPIClient implements APIClientInterface
{
    protected array $authData;
    private Client $httpClient;

    /**
     * @param  array  $authData
     * @param  Client|null  $client
     */
    public function __construct(array $authData, Client $client = null)
    {
        $this->authData = $authData;
        $this->httpClient = $client ?: new Client();
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
    {
        $request = new Request('POST', ApiUrlsEnum::NETAXEPT_PAYMENT_SERVICE, $this->generateHeader(), json_encode($paymentObject));
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

    /**
     * @return string[]
     */
    private function generateHeader(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->authData['token']
        ];
    }
}
